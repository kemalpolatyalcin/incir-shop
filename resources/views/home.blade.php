@extends('layouts.layout')

@slot('title', 'Söke Yamaç Köyü | Geleneksel Naturel Dağ İnciri')

@section('content')
<section class="hero">
    <div class="hero-container">
        <div class="animate-fade-left">
            <span class="hero-badge animate-fade-left delay-1">Yamaç Köyü'nden Doğal Lezzet</span>
            <h1 class="hero-title animate-fade-left delay-2">Güneşin ve Dağ Rüzgarının Kuruttuğu Altın Değer</h1>
            <p class="hero-description animate-fade-left delay-3">Söke Yamaç Köyü'nün serin dağ esintisiyle dalında kendiliğinden ballanıp kuruyan, kimyasal işlem görmemiş en kaliteli naturel dağ incirlerini sunuyoruz.</p>
            <div class="hero-actions animate-fade-up delay-3">
                <a href="{{ route('contact') }}" class="btn-primary" id="hero-contact-btn">
                    <span>Bizimle İletişime Geçin</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
                <a href="{{ route('about') }}" class="btn-secondary" id="hero-about-btn">Hikayemiz</a>
            </div>
        </div>
        <div class="hero-image-wrapper animate-fade-scale">
            <img src="{{ asset('images/6.jpg') }}" alt="Naturel Dağ İnciri" class="hero-image">
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Hasat ve Üretim Galeri</span>
            <h2 class="section-title">Bahçemizden Sofranıza Doğal Yolculuk</h2>
        </div>
        
        <div class="slider-container reveal-scale">
            <div class="slider-wrapper" id="main-slider">
                <div class="slide">
                    <img src="{{ asset('images/2.jpg') }}" alt="Yeşil Dağ İncirleri Dalında">
                    <div class="slide-caption">
                        <h3>Olgunlaşma Süreci</h3>
                        <p>Yaz aylarının sıcak günlerinde yavaşça sararıp ballanmayı bekleyen yeşil incirler.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/11.jpg') }}" alt="Özenle Hazırlanan Defneli Kuru İncirler">
                    <div class="slide-caption">
                        <h3>Geleneksel Ambalajlama</h3>
                        <p>Defne yapraklarıyla zenginleştirilmiş, tazeliğini uzun süre koruyan kraft kağıt paketlerimiz.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/4.jpg') }}" alt="Hasat Sonrası Sepette Kuru İncirler">
                    <div class="slide-caption">
                        <h3>Altın Sarısı Kuru İncirler</h3>
                        <p>Geleneksel hasat sepetinde, güneşte doğal olarak kurumuş A kalite kuru incirler.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/7.jpg') }}" alt="Taze Sarı Dağ İnciri Hasatı" class="focus-bottom">
                    <div class="slide-caption">
                        <h3>Taze Sarı Dağ İnciri</h3>
                        <p>Yamaç Köyü bahçelerimizden tek tek elle seçilen iri ve ballı sarı dağ inciri.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/9.jpg') }}" alt="Ağaçta Olgunlaşan İncir Hasat Zamanı">
                    <div class="slide-caption">
                        <h3>Dalında Olgunlaşma</h3>
                        <p>Kuzey rüzgarlarıyla dalında doğal olarak ballanan ve kuruyan dağ inciri hasadı.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/10.jpg') }}" alt="Olgun İncirlerin Ağaçtaki Görünümü">
                    <div class="slide-caption">
                        <h3>Doğal Ballanma</h3>
                        <p>Güneş altında kuruma evresine giren yüksek kaliteli dağ incirleri.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ asset('images/8.jpg') }}" alt="Söke Yamaç Köyü İncir Bahçelerimiz">
                    <div class="slide-caption">
                        <h3>Doğal Koruma ve Coğrafya</h3>
                        <p>Dilek Yarımadası eteklerinde kurulu, serin poyraz rüzgarlarının estiği eşsiz incir bahçelerimiz.</p>
                    </div>
                </div>
            </div>

            <button class="slider-btn prev" id="slider-prev-btn" aria-label="Önceki Görsel">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </button>
            <button class="slider-btn next" id="slider-next-btn" aria-label="Sonraki Görsel">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </button>

            <div class="slider-dots" id="slider-dots-container"></div>
        </div>
    </div>
</section>

<section class="product-detail-section" id="naturel-incir">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Ürünlerimiz</span>
            <h2 class="section-title">Bahçemizin En Seçkin Mahsulleri</h2>
        </div>

        <div class="product-detail-grid">
            <div class="product-detail-card">
                <div class="product-detail-img-wrapper reveal-left">
                    <img src="{{ asset('images/5.jpg') }}" alt="Naturel Seçme Kuru İncir" class="product-detail-img">
                </div>
                <div class="product-detail-info reveal-right">
                    <span class="product-detail-badge">A Sınıfı Seçme</span>
                    <h3>Naturel Seçme Kuru İncir</h3>
                    <p>Söke Yamaç Köyü'nün en yüksek yamaçlarında yer alan ağaçlarımızdan toplanan A kalite kuru incirlerdir. Hasat sonrasında tek tek el ile seçilen iri boyuttaki incirlerimiz, ince kabuklu yapıları ve lokum kıvamındaki iç dolgusuyla benzersiz bir lezzet sunar.</p>
                    <p>Tamamen geleneksel yöntemlerle, güneşte kurutulmuş olup rengini açmak amacıyla herhangi bir kimyasal beyazlatıcı uygulanmamıştır. Naturel rengi olan altın-bal rengindedir.</p>
                </div>
            </div>

            <div class="product-detail-card reverse">
                <div class="product-detail-info reveal-left">
                    <span class="product-detail-badge">Geleneksel & Aromatik</span>
                    <h3>Defne Yapraklı Kuru İncir</h3>
                    <p>Kuru incirlerimizi, doğallığını koruyarak ve Ege'nin kadim saklama yöntemlerini yaşatarak yabani defne yaprakları eşliğinde paketliyoruz. Kraft paketlerin içerisine yerleştirilen doğal defne yaprakları, incirlerin kurumasını önleyerek lokumsu kıvamını uzun süre korumasına yardımcı olur.</p>
                    <p>Aynı zamanda defne yaprakları, kuru incirlere hafif aromatik bir koku ve lezzet verirken, incirlerin böceklenmesini veya bozulmasını kimyasal ilaç kullanmadan doğal yollarla engeller.</p>
                </div>
                <div class="product-detail-img-wrapper reveal-right">
                    <img src="{{ asset('images/6.jpg') }}" alt="Defne Yapraklı Kuru İncir" class="product-detail-img">
                </div>
            </div>

            <div class="product-detail-card">
                <div class="product-detail-img-wrapper reveal-left">
                    <img src="{{ asset('images/7.jpg') }}" alt="Taze Sarı Dağ İnciri" class="product-detail-img focus-bottom">
                </div>
                <div class="product-detail-info reveal-right">
                    <span class="product-detail-badge">Mevsimlik Taze Hasat</span>
                    <h3>Taze Sarı Dağ İnciri</h3>
                    <p>Ağustos ve Eylül aylarında olgunlaşan taze incirlerimiz, yamaç esintisinin serinliğinde sulanıp ballanır. Yüksek rakımda yetiştirilmesinden ötürü içindeki şeker oranı dengelidir ve boğucu bir tat yerine hafif ferahlatıcı bir aromaya sahiptir.</p>
                    <p>Sabahın erken saatlerinde çiğ düşmeden toplanan taze sarı incirler, ince kabukları sayesinde kabuğu soyulmadan dahi tüketilebilir. Tamamen ilaçsız bahçelerimizden doğrudan sepetlere aktarılır.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-alt">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Bilgi Köşesi</span>
            <h2 class="section-title">Sıkça Sorulan Sorular</h2>
        </div>
        
        <div class="faq-grid">
            <div class="faq-item reveal-left">
                <div class="faq-question">
                    <span>Dağ incirini diğer incirlerden ayıran temel özellik nedir?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Dağ incirleri, yüksek rakımlı ve nem oranı son derece düşük dağ yamaçlarında yetişir. Bu bölgede Dilek Yarımadası'ndan esen kuru kuzey poyraz rüzgarı sayesinde incirler dalındayken nem kapmadan doğal yollarla kurur. Ovalarda yetişen incirlere göre daha ince kabuklu, küçük çekirdekli ve içi daha dolgundur. Ayrıca kimyasal ilaçlama ve beyazlatma işlemine maruz kalmazlar.</p>
                </div>
            </div>

            <div class="faq-item reveal-right">
                <div class="faq-question">
                    <span>Paketlerde neden defne yaprağı kullanıyorsunuz?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Defne yaprağı kullanımı, Ege tarım kültürünün yüzyıllardır uyguladığı doğal bir koruma yöntemidir. Defne yaprağının içerdiği doğal uçucu yağlar, kuru incirleri güvelenme, böceklenme ve küflenmeye karşı kimyasal koruyucu maddelere ihtiyaç duyulmadan tamamen doğal yollarla korur. Ayrıca incirlerimize hafif ve hoş bir Ege esintisi aroması kazandırır.</p>
                </div>
            </div>

            <div class="faq-item reveal-left">
                <div class="faq-question">
                    <span>Kuru incirleri evde nasıl saklamalıyız?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Doğal dağ incirlerimiz hiçbir koruyucu katkı maddesi içermediğinden, serin ve kuru bir ortamda saklanmalıdır. Yaz aylarında veya sıcak ortamlarda incirlerin ballı yapısını korumak ve böceklenmesini önlemek için buzdolabında (sebzelik bölümünde) hava almayan cam kavanozlarda saklamanız önerilir. Tüketmeden 15-20 dakika önce oda sıcaklığına çıkararak tüketebilirsiniz.</p>
                </div>
            </div>

            <div class="faq-item reveal-right">
                <div class="faq-question">
                    <span>Ürünlerinizde şeker veya glikoz şurubu var mı?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p>Kesinlikle hayır. Ürünlerimizin tamamı %100 saf ve doğaldır. İncirlerin içerisindeki şeker, meyvenin olgunlaşma ve kuruma döneminde tamamen kendi özsuyundan ürettiği doğal meyve şekeridir (fruktoz). Dışarıdan hiçbir tatlandırıcı, koruyucu, glikoz şurubu veya parlatıcı kimyasal eklenmez.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const wrapper = document.getElementById('main-slider');
    const slides = document.querySelectorAll('.slide');
    const prevBtn = document.getElementById('slider-prev-btn');
    const nextBtn = document.getElementById('slider-next-btn');
    const dotsContainer = document.getElementById('slider-dots-container');

    let currentIndex = 0;
    const totalSlides = slides.length;
    let slideInterval = setInterval(nextSlide, 4000);

    function resetSlideInterval() {
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, 4000);
    }

    slides.forEach((slide, index) => {
        const dot = document.createElement('div');
        dot.classList.add('slider-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => {
            goToSlide(index);
            resetSlideInterval();
        });
        dotsContainer.appendChild(dot);
    });

    const dots = document.querySelectorAll('.slider-dot');

    function updateSlider() {
        wrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }

    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalSlides;
        updateSlider();
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        updateSlider();
    }

    nextBtn.addEventListener('click', () => {
        nextSlide();
        resetSlideInterval();
    });
    prevBtn.addEventListener('click', () => {
        prevSlide();
        resetSlideInterval();
    });

    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            const activeItem = document.querySelector('.faq-item.active');
            if (activeItem && activeItem !== item) {
                activeItem.classList.remove('active');
                activeItem.querySelector('.faq-answer').style.maxHeight = null;
            }
            item.classList.toggle('active');
            const answer = item.querySelector('.faq-answer');
            if (item.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
</script>
@endsection
