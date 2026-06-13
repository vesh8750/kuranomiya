<?php
/**
 * Seed column categories, owner options, and 20 column posts.
 *
 * Usage: wp eval-file wp-content/themes/kuranomiya/bin/seed-columns.php
 */

defined('ABSPATH') || exit;

$import_cache = [];

function kuranomiya_seed_import_image(string $filename): int {
    global $import_cache;

    $theme_img_dir = get_template_directory() . '/assets/img';
    if (isset($import_cache[$filename])) {
        return $import_cache[$filename];
    }

    $path = $theme_img_dir . '/' . $filename;
    if (!file_exists($path)) {
        WP_CLI::warning("Image not found: {$filename}");
        return 0;
    }

    $existing = get_posts([
        'post_type'      => 'attachment',
        'posts_per_page' => 1,
        'meta_query'     => [[
            'key'     => '_kuranomiya_seed_source',
            'value'   => $filename,
            'compare' => '=',
        ]],
        'fields'         => 'ids',
    ]);

    if ($existing) {
        $import_cache[$filename] = (int) $existing[0];
        return $import_cache[$filename];
    }

    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';
    require_once ABSPATH . 'wp-admin/includes/image.php';

    $upload = wp_upload_bits($filename, null, file_get_contents($path));
    if (!empty($upload['error'])) {
        WP_CLI::warning("Upload failed for {$filename}: {$upload['error']}");
        return 0;
    }

    $attachment_id = wp_insert_attachment([
        'post_mime_type' => wp_check_filetype($filename)['type'],
        'post_title'     => sanitize_file_name(pathinfo($filename, PATHINFO_FILENAME)),
        'post_content'   => '',
        'post_status'    => 'inherit',
    ], $upload['file']);

    if (!$attachment_id || is_wp_error($attachment_id)) {
        WP_CLI::warning("Attachment insert failed for {$filename}");
        return 0;
    }

    update_post_meta($attachment_id, '_kuranomiya_seed_source', $filename);
    $metadata = wp_generate_attachment_metadata($attachment_id, $upload['file']);
    wp_update_attachment_metadata($attachment_id, $metadata);

    $import_cache[$filename] = (int) $attachment_id;

    return $import_cache[$filename];
}

function kuranomiya_seed_set_featured_image(int $post_id, string $filename): void {
    $attachment_id = kuranomiya_seed_import_image($filename);
    if ($attachment_id) {
        set_post_thumbnail($post_id, $attachment_id);
    }
}

function kuranomiya_seed_set_acf_image(int $post_id, string $field, string $filename): void {
    $attachment_id = kuranomiya_seed_import_image($filename);
    if ($attachment_id && function_exists('update_field')) {
        update_field($field, $attachment_id, $post_id);
    }
}

$categories = [
    '貴金属',
    '時計',
    '宝飾品',
    'ブランド品',
    '終活',
    '遺品整理',
    'その他',
];

$category_ids = [];
foreach ($categories as $name) {
    $existing = term_exists($name, 'column-category');
    if ($existing) {
        $category_ids[$name] = (int) (is_array($existing) ? $existing['term_id'] : $existing);
        continue;
    }

    $result = wp_insert_term($name, 'column-category');
    if (is_wp_error($result)) {
        WP_CLI::warning("Could not create category {$name}: " . $result->get_error_message());
        continue;
    }
    $category_ids[$name] = (int) $result['term_id'];
}

if (function_exists('update_field')) {
    $owner_photo_id = kuranomiya_seed_import_image('staff.png');

    update_field('owner_name', '宮原', 'option');
    update_field('owner_title', '業界歴11年以上の査定員', 'option');
    update_field('owner_bio', "貴金属・時計・ブランド品の査定を担当しています。\n\n「見る」だけでなく「観る」——お品物に込められた時間や想いまで丁寧に拝見し、納得いただけるご説明を心がけています。", 'option');
    update_field('column_hero_desc_1', '買取・査定・お品物の知識を店主の視点でお届けします。', 'option');
    update_field('column_hero_desc_2', '大切なお品物の売却や遺品整理などの際は、こちらもご覧ください。', 'option');

    if ($owner_photo_id) {
        update_field('owner_photo', $owner_photo_id, 'option');
    }
}

$posts = [
    [
        'title'      => '「観る」という言葉に込めた、私たちの姿勢について',
        'category'   => 'その他',
        'date'       => '2026-05-01 10:00:00',
        'image'      => 'column-img-1.png',
        'mid_image'  => 'camera-big-man.png',
        'views'      => 412,
        'lead'       => "蔵ノ宮という店名には、「大切なものを大切に観る」という想いがあります。\n「見る」と「観る」——同じ漢字に見えても、私たちが大切にしているのは後者です。",
        'excerpt'    => '「見る」と「観る」の違い。蔵ノ宮が大切にしている、お品物との向き合い方について。',
        'content'    => <<<'HTML'
<h3>見るだけでなく、観る</h3>
<p>多くの方が初めて当店を訪れるとき、最初にお持ちいただくのは「これ、値段がつくのかしら」という静かな不安です。私たちはその不安を、数字だけで終わらせたくありません。刻印、状態、付属品、そしてお品物がどんな場面で使われてきたか——表面だけでなく、背景まで拝見することを大切にしています。</p>
<p>査定は、お品物を評価する作業であると同時に、お客様の人生の一部に触れる時間でもあります。だからこそ、急かすような言葉は使いません。一つひとつ、落ち着いて「観る」——それが蔵ノ宮の基本姿勢です。</p>

<h3>売却は、終わりではなく整理の一部</h3>
<p>遺品整理や生前整理の場面では、「手放すこと」に罪悪感を感じられる方も少なくありません。しかし、使われなくなった品物が新しい場所で役割を果たすことも、また一つの形の整理です。</p>
<p>私たちは、高く売ることを最優先に据えません。納得いただいたうえで、次の一歩を踏み出していただくこと。それが、蔵ノ宮が目指す買取の在り方です。</p>
HTML,
    ],
    [
        'title'      => '金の価値はどう決まる？相場の見方を分かりやすく解説',
        'category'   => '貴金属',
        'date'       => '2026-04-28 10:00:00',
        'image'      => 'column-img-2.png',
        'mid_image'  => 'card-gold-1.png',
        'views'      => 386,
        'lead'       => "金の買取価格は、世界の相場と国内の需給、そしてお品物そのものの純度や重量によって決まります。\n「今日の相場はいくら？」と気になる方のために、基本的な見方を整理しました。",
        'excerpt'    => '金の買取価格は何で決まるのか。相場・純度・重量の関係を分かりやすく解説します。',
        'content'    => <<<'HTML'
<h3>相場は毎日変わるが、慌てる必要はない</h3>
<p>金の国内相場は、東京市場の取引価格や為替の動きなどを反映して日々更新されます。当店では毎日、最新の相場を確認したうえで査定を行っています。ただし、数円の差で今日売るべきか明日売るべきかと迷われる必要はありません。大切なのは、純度と重量が正確に計測されているかどうかです。</p>
<p>インゴット、金歯、切れ端、デザイン性のあるジュエリー——形態によって計量方法は異なりますが、査定の考え方自体は同じです。「どれだけの金が含まれているか」を丁寧に確認します。</p>

<h3>純度の刻印を一緒に確認しましょう</h3>
<p>K18、K24、Pt900——刻印の読み方が分からなくても問題ありません。査定の際には、どこを見て純度を判断しているかをその場でご説明します。不明瞭な刻印の場合も、適切な検査方法で確認しますので、ご安心ください。</p>
HTML,
    ],
    [
        'title'      => '整理を始める前にお品物との向き合い方の話',
        'category'   => '遺品整理',
        'date'       => '2026-04-20 10:00:00',
        'image'      => 'column-img-3.png',
        'mid_image'  => 'story-card-1.png',
        'views'      => 351,
        'lead'       => "実家の整理や遺品整理を始める前に、いきなり箱を開けるのではなく、まず「どう向き合うか」を決めることが大切です。\n急ぐ必要はありません。今日は、その第一歩の話をします。",
        'excerpt'    => '遺品整理を始める前に。お品物と向き合うための、静かな第一歩。',
        'content'    => <<<'HTML'
<h3>全部を一度に決めなくてよい</h3>
<p>「残すもの」「譲るもの」「売却するもの」——整理の現場では、すべてを一度に仕分けようとすると、心も身体も疲れてしまいます。まずは、触れてもよい場所から始めてみてください。タンスの上段、引き出しの一つ、写真の整理からでも構いません。</p>
<p>当店に来られる方の多くも、「全部持ってきたわけではない」とおっしゃいます。それで十分です。一つずつ、納得できる形で進めていけばよいのです。</p>

<h3>想いのある品物ほど、時間をかけて</h3>
<p>故人の方が大切にされていた時計、普段使いの指輪、旅行の記念品——想いのこもった品物ほど、判断に時間がかかるものです。それは自然なことです。ご家族で話し合い、必要であれば第三者の目も借りる。査定は、その判断材料の一つとしてご活用ください。</p>
HTML,
    ],
    [
        'title'      => 'プラチナと金、刻印の見分け方の基本',
        'category'   => '貴金属',
        'date'       => '2026-04-15 10:00:00',
        'image'      => 'card-silver-1.png',
        'mid_image'  => 'market-item-1.png',
        'views'      => 278,
        'lead'       => "白く光る金属は、すべてプラチナとは限りません。シルバー、ホワイトゴールド、プラチナ——似た見た目の品物を、刻印から見分ける基本をまとめました。",
        'excerpt'    => 'プラチナ・金・シルバー。刻印から読み解く、貴金属の見分け方。',
        'content'    => <<<'HTML'
<h3>刻印は「品物の履歴書」</h3>
<p>Pt850、Pt900、K18WG——小さな文字こそが、品物の正体を教えてくれます。ルーペがなくても、当店では査定時に一緒に刻印を確認しながらご説明します。自宅で確認される場合は、明るい場所でゆっくりと表面を見ていただくだけでも十分です。</p>

<h3>見た目だけでは判断しない</h3>
<p>変色やキズがあるからといって、価値がないわけではありません。むしろ、日常使いの証として状態を総合的に拝見します。お品物を持参いただく前に、付属の箱や保証書があれば一緒にお持ちください。</p>
HTML,
    ],
    [
        'title'      => '止まった時計にも、価値が眠っている理由',
        'category'   => '時計',
        'date'       => '2026-04-10 10:00:00',
        'image'      => 'watch-1.png',
        'mid_image'  => 'watch-2.png',
        'views'      => 265,
        'lead'       => "「動かないから価値がない」と思われがちな時計。実際の査定現場では、ブランド、モデル、部品状態によって評価が大きく異なります。",
        'excerpt'    => '動かない時計は売れない？査定現場で見る、時計の価値の考え方。',
        'content'    => <<<'HTML'
<h3>動作しない理由を確認する</h3>
<p>電池切れ、内部の油脂切れ、部品の経年劣化——止まっている理由はさまざまです。外観だけで「使えない」と決めつける前に、モデル名やシリアル、付属品の有無を確認します。箱や保証書、余りコマがあるだけで、評価が変わることもあります。</p>

<h3>修理費用と買取額のバランス</h3>
<p>「直して使い続けるか、売却するか」——どちらがよいかは、修理費用と買取査定額の関係で見えてきます。当店では、無理に売却を勧めることはありません。現状のままの査定額と、修理後の参考情報を分けてお伝えすることも可能です。</p>
HTML,
    ],
    [
        'title'      => 'ルビーの色と透明感、査定で見るポイント',
        'category'   => '宝飾品',
        'date'       => '2026-04-05 10:00:00',
        'image'      => 'card-ornament-1.png',
        'mid_image'  => 'card-ornament-2.png',
        'views'      => 198,
        'lead'       => "宝石の価値は、カラット数だけでは決まりません。色の濃さ、透明感、カットのバランス——ルビーを例に、査定の視点をご紹介します。",
        'excerpt'    => 'ルビーの査定ポイント。色・透明感・カットから読み解く宝石の価値。',
        'content'    => <<<'HTML'
<h3>色は深さと鮮やかさのバランス</h3>
<p>ルビーであれば、過度に暗すぎず、鮮やかすぎない中間のトーンが好まれる傾向があります。ただし、デザイン全体との調和や、地金の品位も合わせて評価します。鑑定書がある場合は、必ず一緒にお持ちください。</p>

<h3>デザイン性も大切な要素</h3>
<p>アンティークジュエリーでは、石そのものよりも作品としての完成度が評価されるケースもあります。ご自身では「古い指輪」と思われていたものが、ブランド作品だった例も少なくありません。</p>
HTML,
    ],
    [
        'title'      => '使い込まれたバッグが持つ、もう一つの価値',
        'category'   => 'ブランド品',
        'date'       => '2026-03-28 10:00:00',
        'image'      => 'item-1.png',
        'mid_image'  => 'item-2.png',
        'views'      => 224,
        'lead'       => "角のスレ、内側の汚れ、付属品の欠け——ブランドバッグの査定では、状態の詳細を一つひとつ確認します。",
        'excerpt'    => '使い込みのあるブランドバッグ。状態別に見る査定の考え方。',
        'content'    => <<<'HTML'
<h3>型番とシリアルで正体を確認</h3>
<p>ブランド品の査定では、まず正規品かどうかの確認が基本です。型番、シリアル、刻印の位置、ステッチの密度——経験を積んだ査定員の目と、必要に応じた確認手順を組み合わせます。</p>

<h3>付属品の有無が評価を左右する</h3>
<p>保存袋、ギャランティーカード、ショルダーストラップ——小さな付属品の有無で査定額が変わることは珍しくありません。すべてが揃っていなくても査定は可能ですが、あるものは一緒にお持ちください。</p>
HTML,
    ],
    [
        'title'      => 'これからの整理計画、どこから始めるか',
        'category'   => '終活',
        'date'       => '2026-03-22 10:00:00',
        'image'      => 'story-card-2.png',
        'mid_image'  => 'story-card-3.png',
        'views'      => 187,
        'lead'       => "終活は、暗い話題ではありません。これからの生活を整え、大切な人に負担をかけないための準備——その一環として、お品物の整理も位置づけられます。",
        'excerpt'    => '終活とお品物整理。無理のない、最初の一歩の考え方。',
        'content'    => <<<'HTML'
<h3>リストを作るところから</h3>
<p>所有している貴金属、時計、ブランド品、思い出の品——まずは「何があるか」を書き出すだけでも、大きな前進です。売却するかどうかは、その次の段階で構いません。エンディングノートに財産の記録を残す方も増えています。</p>

<h3>家族への伝え方</h3>
<p>「この指輪は、こういう意味がある」——言葉で伝えられるうちに、お品物の背景を共有しておくと、後の整理がスムーズになります。当店では、ご本人様とご家族様でのご来店も歓迎しています。</p>
HTML,
    ],
    [
        'title'      => '実家の棚を開ける前に、心の準備を',
        'category'   => '遺品整理',
        'date'       => '2026-03-15 10:00:00',
        'image'      => 'gallery-1.png',
        'mid_image'  => 'greeting-hero-bg.png',
        'views'      => 305,
        'lead'       => "実家の荷物に向き合うとき、物理的な作業より先に必要なのは、心の準備かもしれません。",
        'excerpt'    => '実家の整理前に。心の準備と、進め方のヒント。',
        'content'    => <<<'HTML'
<h3>一人で抱え込まない</h3>
<p>兄弟姉妹や親族と分担する、信頼できる業者に相談する、査定のプロに評価を聞く——選択肢はいくつもあります。すべてを自分ひとりで決める必要はありません。</p>

<h3>記録を残す</h3>
<p>スマートフォンで写真を撮っておくだけでも、後から「あの品物、どこにあったっけ」と迷わずに済みます。売却前の記録としても役立ちます。</p>
HTML,
    ],
    [
        'title'      => '銀製品の黒ずみは、減額の理由になる？',
        'category'   => '貴金属',
        'date'       => '2026-03-08 10:00:00',
        'image'      => 'card-silver-2.png',
        'mid_image'  => 'market-item-2.png',
        'views'      => 176,
        'lead'       => "シルバーのテーブルウェアやアクセサリー、黒ずみや変色があると不安になる方も多いです。査定ではどう見られるのでしょうか。",
        'excerpt'    => '黒ずんだ銀製品は売れる？査定時の見方と、自宅での保管のヒント。',
        'content'    => <<<'HTML'
<h3>黒ずみは必ずしも減額理由ではない</h3>
<p>シルバー925の刻印が確認でき、重量が取れれば、見た目の変色だけで大幅に値段が下がることは少ありません。ただし、メッキ製品や銀含量の低い合金は別扱いになります。</p>

<h3>磨きすぎにも注意</h3>
<p>アンティークの銀製品では、過度な磨きが価値を下げる場合もあります。売却前に自分で磨く必要はありません。そのままお持ちください。</p>
HTML,
    ],
    [
        'title'      => 'オメガとロレックス、年代で変わる評価基準',
        'category'   => '時計',
        'date'       => '2026-03-01 10:00:00',
        'image'      => 'watch-2.png',
        'mid_image'  => 'watch-3.png',
        'views'      => 442,
        'lead'       => "同じブランドでも、モデルや年代、付属品の状態によって買取価格は大きく異なります。代表的な2ブランドを例に解説します。",
        'excerpt'    => 'ロレックス・オメガの買取。モデルと年代で変わる評価の考え方。',
        'content'    => <<<'HTML'
<h3>モデル名を特定する</h3>
<p>ケースバックの文字、文字盤の表記、ブレスの形状——モデル特定の手がかりは時計のあちこちにあります。分からない場合も、当店で確認いたします。</p>

<h3>付属品と状態の記録</h3>
<p>購入時のレシート、保証書、余りコマ、専用ケース——これらが残っているかどうかで評価は変わります。長年引き出しに眠っていた時計ほど、付属品探しから始める方も多いです。</p>
HTML,
    ],
    [
        'title'      => 'パールネックレスの保管方法と査定への影響',
        'category'   => '宝飾品',
        'date'       => '2026-02-22 10:00:00',
        'image'      => 'card-ornament-3.png',
        'mid_image'  => 'cta-jewellery.png',
        'views'      => 163,
        'lead'       => "真珠はデリケートな宝石です。保管環境が査定結果に影響することもあります。",
        'excerpt'    => 'パールネックレスの保管と査定。つやと状態から見る価値。',
        'content'    => <<<'HTML'
<h3>つやと形状を確認</h3>
<p>パールの評価では、つや（テリ）、形、キズ、サイズの揃い方を見ます。長年クローゼットで保管されていたネックレスでも、状態次第では想定以上の評価になることがあります。</p>

<h3>保管の基本</h3>
<p>直射日光、高温多湿、香水やヘアスプレーの接触——これらは真珠の天敵です。布製のケースに入れ、平らな場所で保管するのが基本です。</p>
HTML,
    ],
    [
        'title'      => '古い財布や小物、ブランドが分からなくても',
        'category'   => 'ブランド品',
        'date'       => '2026-02-15 10:00:00',
        'image'      => 'item-3.png',
        'mid_image'  => 'item-4.png',
        'views'      => 149,
        'lead'       => "ブランド名が思い出せない、タグが取れてしまった——そんな状態でも、査定自体は可能です。",
        'excerpt'    => 'ブランド不明の小物も査定可能。刻印や縫製から見極めるポイント。',
        'content'    => <<<'HTML'
<h3>刻印と縫製から判断</h3>
<p>財布やポーチでは、内側の刻印、ファスナーの刻印、ステッチの間隔などが手がかりになります。ご自身でブランドが分からなくても、まずはお持ちください。</p>

<h3>期待値のすり合わせ</h3>
<p>ブランド品でない場合も正直にお伝えします。無理な期待を持たせることはしません。そのうえで、他のお品物と合わせてご相談いただく方も多いです。</p>
HTML,
    ],
    [
        'title'      => 'エンディングノートとお品物リストの作り方',
        'category'   => '終活',
        'date'       => '2026-02-08 10:00:00',
        'image'      => 'story-card-1.png',
        'mid_image'  => 'column-grid.png',
        'views'      => 201,
        'lead'       => "エンディングノートに、お品物の記録を残しておくと、ご家族の負担が大きく減ります。",
        'excerpt'    => 'エンディングノートに残すお品物リスト。書き方のヒント。',
        'content'    => <<<'HTML'
<h3>場所・意味・行き先</h3>
<p>「タンスの右下引き出しにある指輪は、母から譲られたもの。長女に渡す」——この3点が書ければ十分です。売却するもの、残すもの、処分するものを分けて書いておくと、後の整理がスムーズです。</p>

<h3>定期的な見直し</h3>
<p>一度書いたら終わりではありません。新しく買った品物、手放した品物——年に一度の見直しで十分です。</p>
HTML,
    ],
    [
        'title'      => '「捨てる・残す・託す」を決めるための3つの問い',
        'category'   => '遺品整理',
        'date'       => '2026-02-01 10:00:00',
        'image'      => 'achievement-1.png',
        'mid_image'  => 'achievement-2.png',
        'views'      => 289,
        'lead'       => "遺品整理で迷ったとき、自分に問いかける3つの言葉をご紹介します。",
        'excerpt'    => '遺品整理で迷ったら。捨てる・残す・託すを決める3つの問い。',
        'content'    => <<<'HTML'
<h3>誰の記憶か</h3>
<p>その品物は、故人の記憶を呼び起こすものか、それとも家族全体の記憶か。視点を変えると、判断がしやすくなることがあります。</p>

<h3>これから誰が使うか</h3>
<p>残しても使われない品物は、新しい持ち主に託す選択もあります。買取は、その「託す」形の一つです。</p>

<h3>今、自分が納得できるか</h3>
<p>最終的には、ご自身が納得できるかどうかが大切です。今日決められなければ、また来週で構いません。</p>
HTML,
    ],
    [
        'title'      => '買取前に知っておきたい、身分証明書のご案内',
        'category'   => 'その他',
        'date'       => '2026-01-25 10:00:00',
        'image'      => 'card-camera-1.png',
        'mid_image'  => 'small-camera.png',
        'views'      => 134,
        'lead'       => "初めて買取店をご利用の方に向けて、必要な書類と当日の流れをまとめました。",
        'excerpt'    => '初めての買取。必要な身分証明書と、当日の流れ。',
        'content'    => <<<'HTML'
<h3>必要な書類</h3>
<p>運転免許証、マイナンバーカード、パスポートなど、顔写真付きの公的身分証明書をお持ちください。古物営業法に基づく確認のため、コピーをお預かりする場合があります。</p>

<h3>当日の流れ</h3>
<p>ご来店 → お品物の確認 → 査定 → ご説明 → ご納得いただければ買取成立 → 現金お渡し。所要時間は品物の数によりますが、1点からでも丁寧に対応いたします。</p>
HTML,
    ],
    [
        'title'      => 'K18とK24、刻印の読み方入門',
        'category'   => '貴金属',
        'date'       => '2026-01-18 10:00:00',
        'image'      => 'card-gold-1.png',
        'mid_image'  => 'market-item-3.png',
        'views'      => 318,
        'lead'       => "金の純度表示、K18とK24の違い——初めて売却される方にも分かりやすく解説します。",
        'excerpt'    => 'K18とK24の違い。刻印の読み方入門。',
        'content'    => <<<'HTML'
<h3>K24は純金に近い</h3>
<p>K24は金の含有率が高く、地金としての評価が中心になります。K18は75%が金、残りが合金——ジュエリーではこちらが一般的です。デザイン性も評価に含まれます。</p>

<h3>刻印がない場合</h3>
<p>刻印がない金製品でも、専用の検査で純度確認は可能です。自宅で判断せず、まずはお持ちください。</p>
HTML,
    ],
    [
        'title'      => 'クロノグラフ搭載モデルの魅力と保守記録',
        'category'   => '時計',
        'date'       => '2026-01-10 10:00:00',
        'image'      => 'watch-3.png',
        'mid_image'  => 'watch-1.png',
        'views'      => 167,
        'lead'       => "複雑な機能を持つクロノグラフモデルは、保守記録の有無が査定に影響することがあります。",
        'excerpt'    => 'クロノグラフ時計の査定。機能と保守記録の見方。',
        'content'    => <<<'HTML'
<h3>機能の動作確認</h3>
<p>クロノグラフのスタート・ストップ、リセット——基本機能が動作するかどうかを確認します。全部が動かなくても、部品価値として評価される場合があります。</p>

<h3>オーバーホール歴</h3>
<p>正規店や信頼できる修理店でのオーバーホール記録があれば、査定時にプラス評価になることがあります。記録がなくても査定は可能です。</p>
HTML,
    ],
    [
        'title'      => '婚約指輪を手放すとき、丁寧に向き合うということ',
        'category'   => '宝飾品',
        'date'       => '2026-01-03 10:00:00',
        'image'      => 'card-ornament-2.png',
        'mid_image'  => 'card-ornament-1.png',
        'views'      => 245,
        'lead'       => "人生の節目で婚約指輪を手放す決断をされる方へ。査定の場面で大切にしていること。",
        'excerpt'    => '婚約指輪の売却。感情と向き合いながら進める査定の話。',
        'content'    => <<<'HTML'
<h3>急がせない</h3>
<p>婚約指輪の売却は、金額以上に感情がからむ場面です。当店では、査定結果をお伝えしたうえで、即決を求めることはありません。一度持ち帰っていただいても構いません。</p>

<h3>地金と石を分けて説明</h3>
<p>プラチナ台座とダイヤモンド——構成要素ごとに評価根拠をご説明します。納得感のある説明を、何より大切にしています。</p>
HTML,
    ],
    [
        'title'      => '長年愛用した万年筆、静かな価値を見極める',
        'category'   => 'ブランド品',
        'date'       => '2025-12-28 10:00:00',
        'image'      => 'item-2.png',
        'mid_image'  => 'item-1.png',
        'views'      => 121,
        'lead'       => "モンブランやパーカーなど、万年筆にもブランドの世界があります。",
        'excerpt'    => '万年筆の買取。ブランドと状態から見る静かな価値。',
        'content'    => <<<'HTML'
<h3>ペン先と本体の状態</h3>
<p>万年筆の査定では、ペン先の種類（14K、18K等）、本体の素材、箱や保証書の有無を確認します。インクの残りや使用感は、状態評価の一部として見ます。</p>

<h3>コレクター市場の視点</h3>
<p>限定モデルや生産終了品は、一般のブランド小物とは異なる評価基準が適用される場合があります。ご自身では「古い筆」でも、価値がある例もあります。</p>
HTML,
    ],
];

$created = 0;
$skipped = 0;

foreach ($posts as $post_data) {
    $slug     = sanitize_title($post_data['title']);
    $existing = get_posts([
        'post_type'      => 'column',
        'name'           => $slug,
        'posts_per_page' => 1,
        'post_status'    => 'any',
        'fields'         => 'ids',
    ]);

    if ($existing) {
        WP_CLI::log("Skipping existing post: {$post_data['title']}");
        $skipped++;
        continue;
    }

    $post_id = wp_insert_post([
        'post_type'    => 'column',
        'post_title'   => $post_data['title'],
        'post_content' => $post_data['content'],
        'post_excerpt' => $post_data['excerpt'],
        'post_status'  => 'publish',
        'post_date'    => $post_data['date'],
    ], true);

    if (is_wp_error($post_id)) {
        WP_CLI::warning("Failed to create {$post_data['title']}: " . $post_id->get_error_message());
        continue;
    }

    if (!empty($category_ids[$post_data['category']])) {
        wp_set_object_terms($post_id, [(int) $category_ids[$post_data['category']]], 'column-category');
    }

    kuranomiya_seed_set_featured_image($post_id, $post_data['image']);

    if (!empty($post_data['mid_image'])) {
        kuranomiya_seed_set_acf_image($post_id, 'column_mid_image', $post_data['mid_image']);
    }

    if (function_exists('update_field')) {
        update_field('column_lead_text', $post_data['lead'], $post_id);
    } else {
        update_post_meta($post_id, 'column_lead_text', $post_data['lead']);
    }

    update_post_meta($post_id, '_column_view_count', (int) $post_data['views']);

    $created++;
    WP_CLI::log("Created: {$post_data['title']}");
}

WP_CLI::success("Column seed complete. Created {$created}, skipped {$skipped}.");
