<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Photo;
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

        $defaultPhotos = [
            [
                'id' => 2,
                'filename' => '2.jpg',
                'title' => 'Olgunlaşma Süreci',
                'description' => 'Yaz aylarının sıcak günlerinde yavaşça sararıp ballanmayı bekleyen yeşil incirler.',
                'path' => 'images/2.jpg',
            ],
            [
                'id' => 4,
                'filename' => '4.jpg',
                'title' => 'Altın Sarısı Kuru İncirler',
                'description' => 'Geleneksel hasat sepetinde, güneşte doğal olarak kurumuş A kalite kuru incirler.',
                'path' => 'images/4.jpg',
            ],
            [
                'id' => 5,
                'filename' => '5.jpg',
                'title' => 'Naturel Seçme Kuru İncir',
                'description' => "Söke Yamaç Köyü'nün en yüksek rakımlı yamaçlarında yer alan ağaçlarımızdan özenle hasat edilen premium kuru incirlerdir. Hasat sonrasında tek tek el ile seçilen iri boyuttaki (No: 1-2) incirlerimiz, son derece ince kabuklu yapıları ve lokum kıvamındaki yoğun iç dolgusuyla benzersiz bir lezzet sunar. Tamamen geleneksel yöntemlerle, güneş altında kurutulmuş olup rengini açmak amacıyla herhangi bir kimyasal beyazlatıcı (kükürt dioksit vb.) uygulanmamıştır. Altın-bal rengindeki yapısıyla yüksek lif, potasyum ve kalsiyum deposudur. 500g ve 1000g'lık özel korumalı ambalajlarda sunulmaktadır.",
                'path' => 'images/5.jpg',
            ],
            [
                'id' => 6,
                'filename' => '6.jpg',
                'title' => 'Defne Yapraklı Kuru İncir',
                'description' => "Kuru incirlerimizi, Ege'nin bin yıllık kadim saklama yöntemlerini yaşatarak yabani defne yaprakları eşliğinde özenle paketliyoruz. Kraft ambalajların içerisine yerleştirilen doğal defne yaprakları, incirlerin sertleşmesini ve kurumasını önleyerek lokumsu yumuşaklığını uzun süre korumasına yardımcı olur. Aynı zamanda defne yaprağının salgıladığı doğal aromatik esanslar incire nüfuz ederek hafif ve asil bir aroma kazandırır. Kimyasal ilaçlama veya koruyucu madde içermeksizin, defne yaprağının doğal antiseptik özellikleri sayesinde incirler güvelenmeye karşı doğal yollarla korunur. Gurme lezzet arayanlar için eşsiz bir seçenektir.",
                'path' => 'images/6.jpg',
            ],
            [
                'id' => 7,
                'filename' => '7.jpg',
                'title' => 'Taze Sarı Dağ İnciri',
                'description' => "Sadece Ağustos ve Eylül aylarındaki hasat döneminde, sabahın en erken saatlerinde çiğ düşmeden elle toplanan taze dağ incirlerimizdir. Yüksek rakımlı Samsun Dağları eteklerinde yetiştiği için ovalardaki incirlere kıyasla kabuğu çok daha incedir ve soyulmadan rahatlıkla tüketilebilir. Yamaç poyrazının serinliğinde olgunlaşması sayesinde şeker-asit dengesi mükemmel olup boğucu olmayan ferahlatıcı bir aromaya sahiptir. Bahçelerimizden doğrudan sepetlere aktarılan taze incirlerimiz, dalından koptuğu günkü tazeliğini koruması amacıyla özel korumalı soğuk zincir paketleme ile adresinize ulaştırılmaktadır.",
                'path' => 'images/7.jpg',
            ],
            [
                'id' => 8,
                'filename' => '8.jpg',
                'title' => 'Doğal Koruma ve Coğrafya',
                'description' => 'Dilek Yarımadası eteklerinde kurulu, serin poyraz rüzgarlarının estiği eşsiz incir bahçelerimiz.',
                'path' => 'images/8.jpg',
            ],
            [
                'id' => 9,
                'filename' => '9.jpg',
                'title' => 'Dalında Olgunlaşma',
                'description' => 'Kuzey rüzgarlarıyla dalında doğal olarak ballanan ve kuruyan dağ inciri hasadı.',
                'path' => 'images/9.jpg',
            ],
            [
                'id' => 10,
                'filename' => '10.jpg',
                'title' => 'Doğal Ballanma',
                'description' => 'Güneş altında kuruma evresine giren yüksek kaliteli dağ incirleri.',
                'path' => 'images/10.jpg',
            ],
            [
                'id' => 11,
                'filename' => '11.jpg',
                'title' => 'Geleneksel Ambalajlama',
                'description' => 'Defne yapraklarıyla zenginleştirilmiş, tazeliğini uzun süre koruyan kraft kağıt paketlerimiz.',
                'path' => 'images/11.jpg',
            ],
        ];

        foreach ($defaultPhotos as $photo) {
            Photo::updateOrCreate(['id' => $photo['id']], $photo);
        }
    }
}
