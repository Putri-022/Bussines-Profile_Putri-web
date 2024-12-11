# Pemrograman Web_Bussines
Tugas1 UTS1 Pemrograman Web
By Putri Yanti / Informatika 3-A

## Here is the list that is needed
```
fontawesome.com
https://getbootstrap.com/docs/5.0/components/accordion/
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
```
## index => 1
## Head Syntax _ Navigasi
```
<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#container-fluid benner">𝕎𝕖𝕝𝕔𝕠𝕞𝕖 𝕋𝕠 𝔹𝕠𝕦𝕢𝕖𝕥</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#Layanan">𝓛𝓪𝔂𝓪𝓷𝓪𝓷</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Bouqet">𝕭𝖔𝖚𝖖𝖊𝖙</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Tentang">𝕿𝖊𝖓𝖙𝖆𝖓𝖌</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Colaborasi">
                𝓒𝓸𝓵𝓪𝓫𝓸𝓻𝓪𝓼𝓲
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Kontak Kami ">𝓚𝓸𝓷𝓽𝓪𝓴 𝓚𝓪𝓶𝓲</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                𝕸𝖔𝖗𝖊
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="https://www.instagram.com/myqueen.bouquet?igsh=MWprOWNqNGltaTNjNQ=="><i class="fab fa-instagram"></i> 𝕴𝖓𝖘𝖙𝖆𝖌𝖗𝖆𝖒</a></li>
                <li><a class="dropdown-item" href="index3.html"><i class="fa fas fa-envelope"></i></i>𝕶𝖔𝖓𝖘𝖚𝖑𝖙𝖆𝖘𝖎</a></li>
                <li><a class="dropdown-item" href="index2.html"><i class = "fa fa-shopping-cart"></i>𝕿𝖗𝖔𝖑𝖎</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
```
## Body Navbar syntax _ Benner 
```
<div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">𝕾𝖊𝖑𝖆𝖒𝖆𝖙 𝕯𝖆𝖙𝖆𝖓𝖌 𝕯𝖎 𝖂𝖊𝖇𝖘𝖎𝖙𝖊 𝕸𝖞 𝕼𝖚𝖊𝖊𝖓</h4>

        <h3 class="display-1"> 𝓗𝓪𝓲...<span></span></h3>
        <p>𝔖𝔞𝔩𝔞𝔪 ℌ𝔞𝔫𝔤𝔞𝔱 𝔇𝔞𝔯𝔦 𝔎𝔞𝔪𝔦 & 𝔖𝔢𝔪𝔬𝔤𝔞 𝔖𝔢𝔥𝔞𝔱 𝔖𝔢𝔩𝔞𝔩𝔲</p>
        <a href="#Layanan">
          <button type="button" class="btn btn-danger btn-lg">
            ♥ Cek Layanan ♥
          </button>
        </a>
      </div>
</div>
```
## Body syntax _ Layanan
```
<div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="Layanan"><i class = "fa fa-heart "></i>𝕃𝕒𝕪𝕒𝕟𝕒𝕟</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam doloremque nostrum consequatur debitis ab quae similique et, cupiditate
         exercitationem voluptatem libero blanditiis facilis officiis perferendis, ad velit eum. Eos, perferendis?
        </p>
        <div class="row pt-4">
          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-code fa-5x"></i></span>
            <h3 class="mt-3">Programing Web</h3>
            <p>
              proses membuat halaman web atau website dengan menggunakan bahasa pemrograman
            </p>
            <p>
              contoh: Html,Css
              Aplikasi : Visual code , sublime
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"><i class="fas fa-chess-queen fa-5x"></i></span>
            <h3 class="mt-3">Toko Bouqet My Queen</h3>
            <p>
              Toko ini di bangun pada tahun 2021 sampe skrng ,Iseng bikinin buket buat saweran anak waktu era covid 19.
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="fa fas fa-i-cursor fa-5x"></i>></span>
            <h3 class="mt-3">Editing</h3>
            <p>
              proses pemilihan, pemotongan, 
              dan penggabungan materi tertulis, visual, audio, atau sinematik untuk menyampaikan pesan atau informasi.
            </p>
           </div>
        </div>
      </div>
 </div>
```
## Body Syntax _ Portofolio
```
<div class="container-fluid pt-5 pb-5 bg-light"></div>
      <div class="container text-center">
        <h2 class="display-3" id="Bouqet"><i class = "fa fa-heart"></i>𝔹𝕠𝕦𝕢𝕖𝕥</h2>
        <p>
          Beuqet Adalah Kado atau pemberian seseorang buat kita atau sebaliknya untuk orang yg kita sayangi
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/7/19/9cd17f10-b9bc-453c-9c21-a269ffeaa10e.jpg"
                class="card-img-top"
                width="200"
                height="200" />
                <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Makanan</h5>
                <p class="card-text">

                  cara baru untuk memberikan hadiah yang menyenangkan, enak, dan langsung ke orang yang Anda tuju.
                 Konsep ini menggabungkan kesenangan makan makanan favorit Anda dengan keindahan buket bunga.

                </p>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
  
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://img.lazcdn.com/g/ff/kf/Sed6f1ca699e14130893c7138d59bf617D.jpg_720x720q80.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Bunga</h5>
                <p class="card-text">
                  kumpulan bunga yang dirangkai dengan indah dan harmonis, biasanya diikat atau dibungkus dengan elegan."
                </p>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
  
                </p>
                <i class = "fa fa-shopping-cart"></i>
  
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://bimg.akulaku.net/goods/spu/440648781dac40a4b13d34202bf75cf20729.jpg?w=726&q=80&fit=1"
                class="card-img-top"
                width="200"
                height="200"
              />
              <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Bunga & Boneka</h5>
                <p class="card-text">
                  Buket boneka seringkali dijadikan sebagai hadiah untuk orang yang disayangi,
                seperti pasangan, teman, atau keluarga. 
                </p>
                <p>
                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                <span class = "text-primary"><i class = "fas fa-star"></i></span>
                <span class = "text-primary"><i class = "fas fa-star"></i></span>

                </p>
                <i class = "fa fa-shopping-cart"></i>

                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://filebroker-cdn.lazada.co.id/kf/Sc1a2998befba48c49f909484bcb47bebO.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Coklat</h5>
                <p class="card-text">
                  Buket coklat seringkali digunakan sebagai hadiah untuk berbagai acara
                  , seperti ulang tahun, Hari Valentine, atau sebagai tanda kasih sayang kepada seseorang.. 
                </p>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
  
                  </p>
                  <i class = "fa fa-shopping-cart"></i>
  
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1ajqWCLj3QLJ14Aqbaly2jv0m6XHjPMXjeA&s"
                class="card-img-top"
                width="200"
                height="200"
              />
              <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Cowo Atau Riques</h5>
                <p class="card-text">
                  bisa riques sesuei  dengan kesukaan seseorang itu apah semisal rokok, kopi atau baju, jam dll bisa reques
                </p>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
  
                </p>
                <i class = "fa fa-shopping-cart"></i>
  
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://img.ws.mms.shopee.co.id/62d1a57518262ee961a401fa71bb24bf"
                class="card-img-top"
                width="200"
                height="200"
              />
              <span class = "position-absolute bg-primary text-white d-flex align-items-center justify-content-center">Best</span>
              <div class="card-body">
                <h5 class="card-title">Bouqet Uang</h5>
                <p class="card-text">
                  Buket uang bisa menjadi pilihan hadiah yang unik dan berkesan untuk orang terkasih.
                </p>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
  
                </p>
                <i class = "fa fa-shopping-cart"></i>
  
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
```
## Body Syntax _ Tentang 
```
<div class="container-fluid pt-5 pb-5">
      <div class="container">
        <h2 class="display-3 text-center" id="Tentang"><i class = "fa fa-heart"></i>𝕋𝕖𝕟𝕥𝕒𝕟𝕘 </h2>
        <p class="text-center">
         BOUQET 
        </p>
        <div class="clearfix pt-5">
          <img
            src="https://img.wattpad.com/6deeda196ec5c7aeffcac79de5d6ed734b6020c2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f493154677377356b4367675075773d3d2d3431393136363435392e313537663561616232363031363939343136313839393935363430312e6a7067?s=fit&w=720&h=720"
            class="col-md-6 float-md-end mb-3 crop-img"
            width="300"
            height="300"
          />
          <p>
            Buket adalah rangkaian bunga yang indah dan biasanya disusun dengan estetika tertentu.  Ia lebih dari sekadar sekumpulan bunga, buket memiliki makna dan simbolisme yang mendalam.
          </p>
          <p>
            Buket dapat digunakan untuk berbagai keperluan, seperti: 
          <ol>
            <li>untuk acara seperti ulang tahun, wisuda, atau perayaan lainnya </li>
            <li>Dekorasi ruangan dengan menggunakan vas  </li>
            <li>Memperiahkan suasana kegembiraan  </li>
          </ol> 
          </p>
          </p>
          <p>
            Selain buket bunga, ada juga buket snack dan buket uang: 
           <ol>
             <li>Buket snack adalah kombinasi buket bunga dan camilan favorit. </li>
             <li>Buket uang adalah uang asli yang dimasukkan ke dalam bentuk buket. </li>
             <li>buket Coklat , rokok, kopi dll.</li>
           </ol>
          </p>
        </div>
      </div>
    </div>
```
## Body Syntax _ Tim
```
    <div class="container-fluid pt-5 pb-5 bg-light">
      <div class="container text-center">
        <h2 class="display-3" id="Colaborasi"><i class = "fa fa-heart"></i>ℂ𝕠𝕝𝕒𝕓𝕠𝕣𝕒𝕤𝕚</h2>
        <p>
         Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo, rerum exercitationem iste eius nobis quos, rem consequatur et reprehenderit in natus. Ad deserunt itaque, doloremque repellendus ducimus ipsa qui magni.
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4 text-center tim">
            <img
              src="https://i.pinimg.com/736x/99/07/b4/9907b4fcfdb542c72f276e03a48c9bf9.jpg"
              class="rounded-circle mb-3"
            />
            <h4>Putri Yanti</h4>
            <p>Programing web</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href=" https://www.instagram.com/moonlightmagic_py?igsh=eXBlbTk0M2ZnZnNq" class="social"><i class="fab fa-instagram"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="data:image/jpeg;base64,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"
            />
            <h4>Teh Ros</h4>
            <p>Toko Bouqet My Queen</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href=" https://www.instagram.com/myqueen.bouquet/?igsh=MWprOWNqNGltaTNjNQ%3D%3D" class="social"><i class="fab fa-instagram"></i></a>
            </p>
          </div>
          <div class="col-md-4 text-center tim">
            <img
              src="data:image/jpeg;base64,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"
              class="rounded-circle mb-3"
            />
            <h4>Aditiya</h4>
            <p>editing</p>
            <p>
              <a href="" class="social"><i class="fab fa-twitter"></i></a>
              <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
              <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
            </p>
        </div>
        </div>
      </div>
    </div>
```
## Body Syntax _ Client
```
<div class="container-fluid client pt-5 pb-5">
      <div class="container text-center">
        <div class="row pt-4 gx-4 gy-4">
          <div class="col">
            <img
              src="https://cdn.iconscout.com/icon/free/png-256/microsoft-28-761688.png"
            />
          </div>
          <div class="col">
            <img
              src="https://cdn3.iconfinder.com/data/icons/glypho-social-and-other-logos/64/logo-facebook-512.png"
            />
          </div>
          <div class="col">
            <a href=" https://www.instagram.com/myqueen.bouquet?igsh=MWprOWNqNGltaTNjNQ==" class="social"><i class="fab fa-instagram fa-3x"></i></a>
          
          </div>
          <div class="col">
            <img
              src="https://i.pinimg.com/originals/20/1d/17/201d17590b3a7bc8939ca37e577bbbd8.png"
            />
          </div>
          <div class="col">
            <i class="fas fa-chess-queen fa-3x"></i>
          </div>
        </div>
      </div>
    </div>
```
## Body Syntax _ Kontak 
```
<div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="Kontak Kami"><i class = "fa fa-heart"></i>𝕂𝕠𝕟𝕥𝕒𝕜 𝕂𝕒𝕞𝕚</h2>
        <p class="text-center">
          Thank you for visiting our website. Let me know if you have
          something to say
        </p>
        <div class="row pb-3">
          <div class="col-md-6">
            <input 
              class="form-control form-control-lg mb-3"
              type="text"
              id="Name"
              placeholder="Name"
              required
            />
            <input
              class="form-control form-control-lg mb-3"
              type="email"
              id="Email"
              placeholder="Email id"
              required
            />
            <input
              class="form-control form-control-lg"
              type="number"
              id="No. Phone"
              placeholder="No. Phone"
              required
            />
          </div>
          <div class="col-md-6">
            <textarea class="form-control form-control-lg" rows="5"></textarea>
          </div>
        </div>
        <div class="col-md-3 mx-auto text-center">
        
          <button type="submit" class="btn btn-danger btn-lg">
            Submit
          </button>
        </div>
      </div>
    </div>
    <div class="container text-center pt-5 pb-5">
      PUTRI YANTI &copy; 2024
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
  </from>
  </body>
</html>
```

## Index => 2 
## Head Syntax _ Navigasi 
```<nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#container-fluid benner">𝕎𝕖𝕝𝕔𝕠𝕞𝕖 𝕋𝕠 𝔹𝕠𝕦𝕢𝕖𝕥</a>
        
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarText">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#Small Bouqet">𝓢𝓶𝓪𝓵𝓵 𝓑𝓸𝓾𝓺𝓮𝓽</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Medium Bouqet">𝓜𝓮𝓭𝓲𝓾𝓶 𝓑𝓸𝓾𝓺𝓮𝓽</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Big Bouqet">𝓑𝓲𝓰 𝓑𝓸𝓾𝓺𝓮𝓽</a>
            </li>
          </ul>
        </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            𝓜𝓸𝓻𝓮
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://www.instagram.com/myqueen.bouquet?igsh=MWprOWNqNGltaTNjNQ=="><i class="fab fa-instagram"></i>𝕴𝖓𝖘𝖙𝖆𝖌𝖗𝖆𝖒</a></li>
            <li><a class="dropdown-item" href="https://www.youtube.com/watch?v=sVGuGv7ztR8"><i class="fa-brands fa-youtube"></i>𝖄𝖔𝖚𝖙𝖚𝖇𝖊</a></li>
            <li><a class="dropdown-item" href="index.html"><i class="fa-brands fa-servicestack"></i> 𝕮𝖊𝖐 𝕷𝖆𝖞𝖆𝖓𝖆𝖓</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
```
## Body Syntax _ Benner 
```
<div class="container-fluid banner">
  <div class="container text-center">
    <h4 class="display-6">𝕾𝖊𝖑𝖆𝖒𝖆𝖙 𝕯𝖆𝖙𝖆𝖓𝖌 𝕯𝖎 𝖂𝖊𝖇𝖘𝖎𝖙𝖊 𝕸𝖞 𝕼𝖚𝖊𝖊𝖓</h4>

    <h3 class="display-1"> 𝓗𝓪𝓲...<span></span></h3>
    <p>𝔖𝔢𝔩𝔞𝔪𝔞𝔱 𝔇𝔞𝔱𝔞𝔫𝔤 𝔇𝔦 𝔗𝔯𝔬𝔩𝔦 𝔎𝔞𝔪𝔦</p>
    <a href="index.html">
      <button type="button" class="btn btn-danger btn-lg">
        ♥ Cek Layanan ♥
      </button>
    </a>
  </div>
</div>
```
## Body Syntax _ Portofolio Small Bouqet 
```
<div class="container-fluid pt-5 pb-5 bg-light"></div>
      <div class="container text-center">
        
        <h2 class="display-3" id="Small Bouqet"><i class = "fa fa-heart"></i>𝕾𝖒𝖆𝖑𝖑 𝕭𝖔𝖚𝖖𝖊𝖙</h2>
        <p>
          Beuqet Adalah Kado atau pemberian seseorang buat kita atau sebaliknya untuk orang yg kita sayangi
        </p>
      <div class="box-kiri"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpHt0fcF3OT5FtUHrSwVT4RAp_f75BwTbwrw&s">
        <p>Buket Bunga & Coklat</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        <a href="#" class="btn btn-primary">Check Out</a>
      </div>
      <div class="box-tengah"> 
        <img src="data:image/jpeg;base64,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">
        <p>Buket Bunga 1 Tangkai</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        <a href="#" class="btn btn-primary">Check Out</a>  
      </div>
      <div class="box-kanan"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTRUcwvHsoVgNDkVMe9TrQuiZmenvZTg2MpRR5HCKTRVnAiccWc0qVBkWhFdZV2Da08To&usqp=CAU">
        <p>Buket Makanan</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        <a href="#" class="btn btn-primary">Check Out</a>  
      </div>
      <div class="box-kiri"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbR4CtXE3iNd3HNag1zyOsqgkEyhGRVdAMow&s">
        <p>Buket uang</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        <a href="#" class="btn btn-primary">Check Out</a>
      </div>
      <div class="box-tengah"> 
        <img src="data:image/jpeg;base64,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">
        <p>Buket Bunga riques & cowo</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        
        <a href="#" class="btn btn-primary">Check Out</a>  
      </div>
      <div class="box-kanan"> 
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTRUcwvHsoVgNDkVMe9TrQuiZmenvZTg2MpRR5HCKTRVnAiccWc0qVBkWhFdZV2Da08To&usqp=CAU">
        <p>Buket Makanan</p>
        <p>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>
          <span class = "text-primary"><i class = "fas fa-star"></i></span>

        </p>
        <i class = "fa fa-shopping-cart"></i>
        <a href="#" class="btn btn-primary">Check Out</a>  
      </div>
  </div>
 </div>
```
## Body Syntax _ Portofolio Medium Bouqet
```
 <div class="container pt-5 pb-5 bg-light"></div>
      <div class="container text-center">
        <h2 class="display-3" id="Medium Bouqet"><i class = "fa fa-heart"></i>𝕸𝖊𝖉𝖎𝖚𝖒 𝕭𝖔𝖚𝖖𝖊𝖙</h2>
        <p>
          Beuqet Adalah Kado atau pemberian seseorang buat kita atau sebaliknya untuk orang yg kita sayangi
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAZF5Q_OjVjNaq3j5uRCYZRA9-R6uBAsrG1g&s"
                class="card-img-top"
                width="200"
                height="200"/>
              <div class="card-body">
                <h5 class="card-title">Bouqet Makanan </h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://img.lazcdn.com/g/ff/kf/Sed6f1ca699e14130893c7138d59bf617D.jpg_720x720q80.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Bunga</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://bimg.akulaku.net/goods/spu/440648781dac40a4b13d34202bf75cf20729.jpg?w=726&q=80&fit=1"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Bunga & Boneka</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://i.pinimg.com/736x/12/d4/4f/12d44fe79ab894998e73f3a5cf4567e0.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Coklat</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHo7gsNZPs1gnMJ6jQl65LfhATwZPthJB1J33GCU53W7f89DcGglh28Aah_70NNhW9id4&usqp=CAU"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Cowo Atau Riques</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTO8rvuoWlq2-ZNuIQ4ryEUIhQWuJQK-3ohiw&s"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Uang</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
```
 ## Body Syntax _ Portofolio Big Bouqet 
```
  <div class="container pt-5 pb-5 bg-light"></div>
      <div class="container text-center">
        <h2 class="display-3" id="Big Bouqet"><i class = "fa fa-heart"></i>𝕭𝖎𝖌 𝕭𝖔𝖚𝖖𝖊𝖙</h2>
        <p>
          Beuqet Adalah Kado atau pemberian seseorang buat kita atau sebaliknya untuk orang yg kita sayangi
        </p>
        <div class="row pt-4 gx-4 gy-4">
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAZF5Q_OjVjNaq3j5uRCYZRA9-R6uBAsrG1g&s"
                class="card-img-top"
                width="200"
                height="200"/>
              <div class="card-body">
                <h5 class="card-title">Bouqet Makanan </h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="gambar/p1.jpeg"
                class="card-img-top"
                width="30"
                height="180"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet uang</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="gambar/p2.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Kupu-kupu</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://filebroker-cdn.lazada.co.id/kf/Sc1a2998befba48c49f909484bcb47bebO.jpg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Coklat</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHo7gsNZPs1gnMJ6jQl65LfhATwZPthJB1J33GCU53W7f89DcGglh28Aah_70NNhW9id4&usqp=CAU"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Cowo Atau Riques</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card crop-img">
              <img
                src="gambar/p3.jpeg"
                class="card-img-top"
                width="200"
                height="200"
              />
              <div class="card-body">
                <h5 class="card-title">Bouqet Riques</h5>
                <p>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
                  <span class = "text-primary"><i class = "fas fa-star"></i></span>
        
                </p>
                <i class = "fa fa-shopping-cart"></i>
                <a href="#" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>

</div>
<div class="container text-center pt-5 pb-5">
  BY PUTRI YANTI &copy; 2024
</div>
<script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
  crossorigin="anonymous"
></script>
</from>
</body>
</html>
```
## Index => 3
## Head Syntax _ Navigasi 
```
  <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#container-fluid benner">𝕎𝕖𝕝𝕔𝕠𝕞𝕖 𝕋𝕠 𝔹𝕠𝕦𝕢𝕖𝕥</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
          text-alight="center"
        >
          <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#Keunggulan">𝓚𝓮𝓾𝓷𝓰𝓰𝓾𝓵𝓪𝓷</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Pesan">𝓟𝓮𝓼𝓪𝓷</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Pembelian Bouqet">𝓟𝓮𝓶𝓫𝓮𝓵𝓲𝓪𝓷 𝓑𝓸𝓾𝓺𝓮𝓽</a>
              </li>
            </ul>
        </div>
       </div>
    </nav>
 ```
## Body Syntax _ Benner 
     <div class="container-fluid banner">
      <div class="container text-center">
        <h4 class="display-6">𝕾𝖊𝖑𝖆𝖒𝖆𝖙 𝕯𝖆𝖙𝖆𝖓𝖌 𝕯𝖎 𝖂𝖊𝖇𝖘𝖎𝖙𝖊 𝕸𝖞 𝕼𝖚𝖊𝖊𝖓</h4>

        <h3 class="display-1"> 𝓗𝓪𝓲...<span></span></h3>
        <p>𝔖𝔞𝔩𝔞𝔪 ℌ𝔞𝔫𝔤𝔞𝔱 𝔇𝔞𝔯𝔦 𝔎𝔞𝔪𝔦 & 𝔖𝔢𝔪𝔬𝔤𝔞 𝔖𝔢𝔥𝔞𝔱 𝔖𝔢𝔩𝔞𝔩𝔲</p>
        <a href="index.html">
          <button type="button" class="btn btn-danger btn-lg">
            ♥ Cek Layanan ♥
          </button>
        </a>
      </div>
    </div>
```
## Body Syntax _ Keungulan 
<div class="container-fluid pt-5 pb-5">
  <div class="container-pembeli">
    <h2 class="display-3 text-center" id="Keunggulan"><i class = "fa fa-heart"></i>𝕶𝖊𝖚𝖓𝖌𝖌𝖚𝖑𝖆𝖓</h2>
    <div class="row pt-4">
      <div class="col-md-4">
        <h3 class="mt-3">🐳  🎀  𝒶𝑒𝓈𝓉𝒽𝑒𝓉𝒾𝒸  🎀  🐳</h3>
        <p>
        </p>
      </div>

      <div class="col-md-4">
        <h3 class="mt-3"> ¯`•. 🎀  𝒸𝒽𝒶𝓇𝓂𝒾𝓃𝑔  🎀 .•`¯</h3>
        <p>
        </p>
      </div>
      <div class="col-md-4">
        <h3 class="mt-3">🐭  🎀  𝑔𝓇𝑒𝒶𝓉  🎀  🐭</h3>
        <p>
        </p>
      </div>
    </div>
  </div>
```
## Body Syntax _ Pesan 
```
<div class="container-fluid pt-5 pb-5 kontak">
  <div class="container_pesan">
    <h2 class="display-3 text-center" id="Pesan"><i class = "fa fa-heart"></i>𝕻𝖊𝖘𝖆𝖓</h2>
    <p class="text-center">
      Thank you for visiting our website. Let me know if you have
      something to say
    </p>
    <div class="row pb-3">
      <div class="col-md-6">
        <input 
          class="form-control form-control-lg mb-3"
          type="text"
          id="Name"
          placeholder="Name"
          required
        />
        <input
          class="form-control form-control-lg mb-3"
          type="email"
          id="Email"
          placeholder="Email id"
          required
        />
        <input
          class="form-control form-control-lg"
          type="number"
          id="No. Phone"
          placeholder="No. Phone"
          required
        />
      </div>
      <div class="col-md-6">
        <textarea class="form-control form-control-lg" rows="5"></textarea>
      </div>
    </div>
    <div class="col-md-3 mx-auto text-center">
    
      <button type="submit" class="btn btn-danger btn-lg">
        Kirim
      </button>
    </div>
  </div>
</div>
</div>
```
## Body Syntax _ Pembeli Bouqet
```
  <div class="container-fluid pt-5 pb-5">
    <div class="container-pembeli">
      <h2 class="display-3 text-center" id="Pembelian Bouqet"><i class = "fa fa-heart"></i>𝕻𝖊𝖒𝖇𝖊𝖑𝖎𝖆𝖓 𝕭𝖔𝖚𝖖𝖊𝖙
      </h2>
      <p class="text-center">
       BOUQET 
      </p>
      <div class="clearfix pt-5">
        <img
          src="https://img.wattpad.com/6deeda196ec5c7aeffcac79de5d6ed734b6020c2/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f493154677377356b4367675075773d3d2d3431393136363435392e313537663561616232363031363939343136313839393935363430312e6a7067?s=fit&w=720&h=720"
          class="col-md-6 float-md-end mb-3 crop-img"
          width="300"
          height="300"
        />
        <body>
          <header>
              <h3>Bouqet My Queen</h3>
              <p> Mulai Jualan tahun 2021 sampai sekarang,Iseng bikinin buket buat saweran anak waktu era covid 19.
              </p>
              <p>"Menjual aneka macam buket dan gift lainnya.
                tersedia juga mahar pernimahan,jasa hias mobil pengantin,sewa+jasa seserahan dan dekor ulang tahun"</p>
              <h3>Alamat</h3>
              <p>V7PP+GPJ, Jeruktipis, Kec. Kragilan, Kabupaten Serang, Banten 42184</p>
          </header>
          <h4> Produk </h4>
          <nav>
              <ul>
                  <li><a href="from_daftar.html">Daftar baru</li>
                  <li><a href="list_pembeli.html">List daftar Produk</li>
              </ul>
          </nav>
      </div>
    </div>
</body>
</body>
</html>
</body>
</html>



