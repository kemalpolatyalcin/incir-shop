@extends('layouts.layout')

@slot('title', 'Söke Yamaç Köyü | Geleneksel Naturel Dağ İnciri')

@section('content')
<section class="hero">
    <div class="hero-container">
        <div class="animate-fade-left">
            <span class="hero-badge animate-fade-left delay-1">Yamaç Köyü'nden Doğal Lezzet</span>
            <h1 class="hero-title animate-fade-left delay-2">{{ \App\Models\SiteContent::getValue('hero_title', 'Güneşin ve Dağ Rüzgarının Kuruttuğu Altın Değer') }}</h1>
            <p class="hero-description animate-fade-left delay-3">{{ \App\Models\SiteContent::getValue('hero_description', "Söke Yamaç Köyü'nün serin dağ esintisiyle dalında kendiliğinden ballanıp kuruyan, kimyasal işlem görmemiş en kaliteli naturel dağ incirlerini sunuyoruz.") }}</p>
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

<section class="section" id="naturel-incir">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Ürünlerimiz</span>
            <h2 class="section-title">Bahçemizin En Seçkin Mahsulleri</h2>
        </div>

        <div class="features-grid reveal-scale" style="margin-top: 4rem; margin-bottom: 4rem;">
            <a href="{{ route('products') }}#urun-1" style="text-decoration: none; color: inherit; display: block;">
                <div class="feature-card" style="padding: 2rem;">
                    <div style="border-radius: 12px; overflow: hidden; height: 200px; margin-bottom: 1.5rem; box-shadow: var(--shadow-sm);">
                        <img src="{{ asset('images/5.jpg') }}" alt="Naturel Seçme Kuru İncir" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 class="feature-card-title" style="font-size: 1.25rem;">{{ \App\Models\SiteContent::getValue('product_1_title', 'Naturel Seçme Kuru İncir') }}</h3>
                    <p class="feature-card-desc" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ \App\Models\SiteContent::getValue('product_1_desc') }}</p>
                </div>
            </a>

            <a href="{{ route('products') }}#urun-2" style="text-decoration: none; color: inherit; display: block;">
                <div class="feature-card" style="padding: 2rem;">
                    <div style="border-radius: 12px; overflow: hidden; height: 200px; margin-bottom: 1.5rem; box-shadow: var(--shadow-sm);">
                        <img src="{{ asset('images/6.jpg') }}" alt="Defne Yapraklı Kuru İncir" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <h3 class="feature-card-title" style="font-size: 1.25rem;">{{ \App\Models\SiteContent::getValue('product_2_title', 'Defne Yapraklı Kuru İncir') }}</h3>
                    <p class="feature-card-desc" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ \App\Models\SiteContent::getValue('product_2_desc') }}</p>
                </div>
            </a>

            <a href="{{ route('products') }}#urun-3" style="text-decoration: none; color: inherit; display: block;">
                <div class="feature-card" style="padding: 2rem;">
                    <div style="border-radius: 12px; overflow: hidden; height: 200px; margin-bottom: 1.5rem; box-shadow: var(--shadow-sm);">
                        <img src="{{ asset('images/7.jpg') }}" alt="Taze Sarı Dağ İnciri" style="width: 100%; height: 100%; object-fit: cover;" class="focus-bottom">
                    </div>
                    <h3 class="feature-card-title" style="font-size: 1.25rem;">{{ \App\Models\SiteContent::getValue('product_3_title', 'Taze Sarı Dağ İnciri') }}</h3>
                    <p class="feature-card-desc" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">{{ \App\Models\SiteContent::getValue('product_3_desc') }}</p>
                </div>
            </a>
        </div>

        <div style="text-align: center;" class="reveal">
            <a href="{{ route('products') }}" class="btn-primary" style="padding: 1rem 2.5rem; border-radius: 50px;">Tüm Ürün Detaylarını İnceleyin</a>
        </div>
    </div>
</section>

<section class="reviews-section section-alt">
    <div class="section-container">
        <div class="section-header reveal">
            <span class="section-subtitle">Müşteri Değerlendirmeleri</span>
            <h2 class="section-title">Müşterilerimizin Bizimle İlgili Görüşleri</h2>
        </div>

        <div class="reviews-grid">
            <div class="review-card reveal-left">
                <div class="review-header">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">MÖ</div>
                        <div>
                            <h4 class="reviewer-name">Mehmet Özkan</h4>
                            <div class="reviewer-source">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="color: #4CAF50;">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                                </svg>
                                <span>Onaylı Müşteri Değerlendirmesi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviewer-stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review-text">incirler gerçekten çok lezzetliymiş. ilk defa aldık ama ailecek çok beğendik, özellikle defne yaprağı kokusu çok güzel bi hava katmış incire. kargo da hızlı geldi. teşekkür ederiz.</p>
            </div>

            <div class="review-card reveal">
                <div class="review-header">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">AY</div>
                        <div>
                            <h4 class="reviewer-name">Ayşe Yılmaz</h4>
                            <div class="reviewer-source">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="color: #4CAF50;">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                                </svg>
                                <span>Onaylı Müşteri Değerlendirmesi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviewer-stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review-text">İnternette sipariş butonu göremeyince şaşırmıştım ama tlf la arayıp kemal bey ile görüşmek çok daha samimi oldu. incirlerin ballı yapısı harika, kabuğu da incecik yumuşacık. defneli paketleme için ayrıca tşk ederim.</p>
            </div>

            <div class="review-card reveal-right">
                <div class="review-header">
                    <div class="reviewer-info">
                        <div class="reviewer-avatar">HK</div>
                        <div>
                            <h4 class="reviewer-name">Hakan Kaya</h4>
                            <div class="reviewer-source">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="currentColor" style="color: #4CAF50;">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                                </svg>
                                <span>Onaylı Müşteri Değerlendirmesi</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reviewer-stars">
                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                </div>
                <p class="review-text">Sarı dağ inciri sipariş etmiştik mevsiminde, gerçekten taptaze geldi. kurusunu da denedik oda çok başarılı. herhangi bir kimyasal işlem görmediği renginden de anlaşılıyor zaten tavsiye ederim.</p>
            </div>
        </div>
    </div>
</section>

<section class="section">
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
            const activeItem = document.querySelector('.faq-item.faq-open');
            if (activeItem && activeItem !== item) {
                activeItem.classList.remove('faq-open');
                activeItem.querySelector('.faq-answer').style.maxHeight = null;
            }
            item.classList.toggle('faq-open');
            const answer = item.querySelector('.faq-answer');
            if (item.classList.contains('faq-open')) {
                answer.style.maxHeight = answer.scrollHeight + 'px';
            } else {
                answer.style.maxHeight = null;
            }
        });
    });
</script>
@endsection
