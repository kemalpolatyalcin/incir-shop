<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteContent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'incir@yamac.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('123456'),
            ]
        );

        $contents = [
            'hero_title' => 'Güneşin ve Dağ Rüzgarının Kuruttuğu Altın Değer',
            'hero_description' => "Söke Yamaç Köyü'nün serin dağ esintisiyle dalında kendiliğinden ballanıp kuruyan, kimyasal işlem görmemiş en kaliteli naturel dağ incirlerini sunuyoruz.",
            'product_1_title' => 'Naturel Seçme Kuru İncir',
            'product_1_desc' => "Söke Yamaç Köyü'nün en yüksek yamaçlarında yer alan ağaçlarımızdan toplanan A kalite kuru incirlerdir. Hasat sonrasında tek tek el ile seçilen iri boyuttaki incirlerimiz, ince kabuklu yapıları ve lokum kıvamındaki iç dolgusuyla benzersiz bir lezzet sunar. Tamamen geleneksel yöntemlerle, güneşte kurutulmuş olup rengini açmak amacıyla herhangi bir kimyasal beyazlatıcı uygulanmamıştır. Naturel rengi olan altın-bal rengindedir.",
            'product_2_title' => 'Defne Yapraklı Kuru İncir',
            'product_2_desc' => "Kuru incirlerimizi, doğallığını koruyarak ve Ege'nin kadim saklama yöntemlerini yaşatarak yabani defne yaprakları eşliğinde paketliyoruz. Kraft paketlerin içerisine yerleştirilen doğal defne yaprakları, incirlerin kurumasını önleyerek lokumsi kıvamını uzun süre korumasına yardımcı olur. Aynı zamanda defne yaprakları, kuru incirlere hafif aromatik bir koku ve lezzet verirken, incirlerin böceklenmesini veya bozulmasını kimyasal ilaç kullanmadan doğal yollarla engeller.",
            'product_3_title' => 'Taze Sarı Dağ İnciri',
            'product_3_desc' => "Ağustos ve Eylül aylarında olgunlaşan taze incirlerimiz, yamaç esintisinin serinliğinde sulanıp ballanır. Yüksek rakımda yetiştirilmesinden ötürü içindeki şeker oranı dengelidir ve boğucu bir tat yerine hafif ferahlatıcı bir aromaya sahiptir. Sabahın erken saatlerinde çiğ düşmeden toplanan taze sarı incirler, ince kabukları sayesinde kabuğu soyulmadan dahi tüketilebilir. Tamamen ilaçsız bahçelerimizden doğrudan sepetlere aktarılır.",
            'about_title' => 'Söke Yamaç Köyü Gıda Tarım',
            'about_text_1' => "Söke Yamaç Köyü Gıda Tarım San ve Tic Ltd Şti olarak, Ege'nin binlerce yıllık tarım kültürünü ve eşsiz zenginliklerini korumak, yaşatmak ve en saf haliyle sofralarınıza ulaştırmak amacıyla yola çıktık. Söke'nin Samsun Dağları eteklerinde kurulu, kendine özgü iklimiyle bilinen Yamaç Köyü'nün yüksek kesimlerinde, ailemizin nesiller boyu sürdürdüğü tarımsal üretimi kurumsal bir çatı altında birleştirdik.",
            'about_text_2' => "Yamaç Köyü, konumu itibarıyla Dilek Yarımadası dağlarından esen serin ve nemsiz poyraz rüzgarlarını doğrudan alır. Bu esinti, incirlerimizin dalında kendi kendine ballanıp suyunu çekerek en ideal kıvamda kurumasına imkan sağlar. Ege'nin bu doğal hediyesini hiçbir kimyasal işleme tabi tutmadan, geleneksel kurutma sergilerinde kurutuyor ve el işçiliğiyle seçerek paketliyoruz.",
            'contact_address' => 'Yamaç Köyü, Söke / Aydın',
            'contact_phone' => '0532 7172110',
            'contact_map_url' => 'https://maps.google.com/maps?q=Yama%C3%A7%20K%C3%B6y%C3%BC%2C%20S%C3%B6ke%2FAyd%C4%B1n&t=&z=13&ie=UTF8&iwloc=&output=embed'
        ];

        foreach ($contents as $key => $value) {
            SiteContent::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }
    }
}
