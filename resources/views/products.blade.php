@extends('layouts.layout')

@slot('title', 'Ürünlerimiz | Söke Yamaç Köyü Gıda Tarım')

@section('content')
    <section class="section section-alt" style="padding-top: 10rem; padding-bottom: 4rem; text-align: center;">
        <div class="section-container">
            <span class="section-subtitle animate-fade-up">Yamacı'ndan Doğal Gurme</span>
            <h1 class="section-title animate-fade-up" style="margin-bottom: 1rem;">Bahçemizin Eşsiz Mahsulleri</h1>
            <p class="animate-fade-up" style="color: var(--text-secondary); max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.7;">
                Samsun Dağları eteklerindeki bahçelerimizde esen serin dağ esintisi ve Ege güneşiyle dalında kendi özsuyu ile ballanan, hiçbir kimyasal işlem görmemiş en seçkin naturel dağ incirlerimizi beğeninize sunuyoruz.
            </p>
        </div>
    </section>

    <section class="product-detail-section" id="naturel-incir" style="padding-top: 4rem; padding-bottom: 8rem;">
        <div class="section-container">
            <div class="product-detail-grid">
                <div class="product-detail-card">
                    <div class="product-detail-img-wrapper reveal-left">
                        <img src="{{ asset($photos[5]->path ?? 'images/5.jpg') }}?v={{ $photos[5]->updated_at->timestamp ?? time() }}" alt="Naturel Seçme Kuru İncir" class="product-detail-img">
                    </div>
                    <div class="product-detail-info reveal-right">
                        <span class="product-detail-badge">A Sınıfı Seçme</span>
                        <h3>{{ $photos[5]->title ?? 'Naturel Seçme Kuru İncir' }}</h3>
                        <p>{!! nl2br(e($photos[5]->description ?? "Söke Yamaç Köyü'nün en yüksek yamaçlarında yer alan ağaçlarımızdan toplanan A kalite kuru incirlerdir. Hasat sonrasında tek tek el ile seçilen iri boyuttaki incirlerimiz, ince kabuklu yapıları ve lokum kıvamındaki iç dolgusuyla benzersiz bir lezzet sunar.")) !!}</p>
                    </div>
                </div>

                <div class="product-detail-card reverse">
                    <div class="product-detail-info reveal-left">
                        <span class="product-detail-badge">Geleneksel & Aromatik</span>
                        <h3>{{ $photos[6]->title ?? 'Defne Yapraklı Kuru İncir' }}</h3>
                        <p>{!! nl2br(e($photos[6]->description ?? "Kuru incirlerimizi, doğallığını koruyarak ve Ege'nin kadim saklama yöntemlerini yaşatarak yabani defne yaprakları eşliğinde paketliyoruz. Kraft paketlerin içerisine yerleştirilen doğal defne yaprakları, incirlerin kurumasını önleyerek lokumsu kıvamını uzun süre korumasına yardımcı olur.\n\nAynı zamanda defne yaprakları, kuru incirlere hafif aromatik bir koku ve lezzet verirken, incirlerin böceklenmesini veya bozulmasını kimyasal ilaç kullanmadan doğal yollarla engeller.")) !!}</p>
                    </div>
                    <div class="product-detail-img-wrapper reveal-right">
                        <img src="{{ asset($photos[6]->path ?? 'images/6.jpg') }}?v={{ $photos[6]->updated_at->timestamp ?? time() }}" alt="Defne Yapraklı Kuru İncir" class="product-detail-img">
                    </div>
                </div>

                <div class="product-detail-card">
                    <div class="product-detail-img-wrapper reveal-left">
                        <img src="{{ asset($photos[7]->path ?? 'images/7.jpg') }}?v={{ $photos[7]->updated_at->timestamp ?? time() }}" alt="Taze Sarı Dağ İnciri" class="product-detail-img focus-bottom">
                    </div>
                    <div class="product-detail-info reveal-right">
                        <span class="product-detail-badge">Mevsimlik Taze Hasat</span>
                        <h3>{{ $photos[7]->title ?? 'Taze Sarı Dağ İnciri' }}</h3>
                        <p>{!! nl2br(e($photos[7]->description ?? "Ağustos ve Eylül aylarında olgunlaşan taze incirlerimiz, yamaç esintisinin serinliğinde sulanıp ballanır. Yüksek rakımda yetiştirilmesinden ötürü içindeki şeker oranı dengelidir ve boğucu bir tat yerine hafif ferahlatıcı bir aromaya sahiptir.\n\nSabahın erken saatlerinde çiğ düşmeden toplanan taze sarı incirler, ince kabukları sayesinde kabuğu soyulmadan dahi tüketilebilir. Tamamen ilaçsız bahçelerimizden doğrudan sepetlere aktarılır.")) !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
