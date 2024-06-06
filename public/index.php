<?php
// Start the session at the very top of the file
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Fjalla+One&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/ad0c4e912f.js"
      crossorigin="anonymous"
      
    >
  </script>
    <link
      href="https://fonts.googleapis.com/css2?family=Fascinate&display=swap"
      rel="stylesheet"
    />
    <link href="./styles.css" rel="stylesheet" type="text/css" />
    <title>Harmony House</title>
  </head>
  <body>
  <header class="bg-dark w-100">
    <nav class="nav-bar ai-c jc-sb py-1 max-w-80 w-90">
      <div class="nav--left ai-c">
        <div class="nav__brand">
          <div class="nav__brand__logo mr-2">
            <img class="nav__brand__logo__img" src="../images/H_White.png" alt="waves-icon" />
          </div>
          <div class="nav__brand__name">
            <a class="brand-name--sm-w" href="/index.html">Harmony House</a>
          </div>
        </div>
        <div class="nav__menu--short px-3 py-1 ai-c">
          <div><a href="/index.html"><i class="fas fa-bars"></i></a></div>
        </div>
        <div class="nav__menu ai-c tupper">
          <a class="nav__menu__item" href="/index.html">
            <div class="nav__menu__item co-r ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-home"></i></div>
              <div class="nav__menu_item-text">home</div>
            </div>
          </a>
          <a class="nav__menu__item" href="#">
            <div class="nav__menu__item co-l ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-record-vinyl"></i></div>
              <div class="nav__menu_item-text">collection</div>
            </div>
          </a>
          <a class="nav__menu__item" href="#">
            <div class="nav__menu__item co-l ai-c">
              <div class="nav__menu__item-icon mr-2"><i class="fas fa-shopping-cart"></i></div>
              <div class="nav__menu_item-text">shopping</div>
            </div>
          </a>
        </div>
      </div>
      <div class="profile-icon d-none d-md-flex d-lg-none"><i class="fas fa-user"></i></div>
      <div class="nav--right ai-c d-none d-lg-flex h-100">
        <!-- <div class="messages mr-4"><a href="#"><i class="fas fa-envelope co-l"></i></a></div> -->
        <?php
        if (isset($_SESSION['username'])) {
            $username = htmlspecialchars($_SESSION['username']);
            echo '
            <button class="loginBTN" disabled>
              <div class="wrapper">
                <span>'.$username.'</span>
                <div class="circle circle-12"></div>
                <div class="circle circle-11"></div>
                <div class="circle circle-10"></div>
                <div class="circle circle-9"></div>
                <div class="circle circle-8"></div>
                <div class="circle circle-7"></div>
                <div class="circle circle-6"></div>
                <div class="circle circle-5"></div>
                <div class="circle circle-4"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-1"></div>
              </div>
            </button>
            
            <button class="logoutBtn" onclick="window.location.href=\'logout.php\'">
              <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
              <div class="text">Logout</div>
            </button>


            ';
        } else {
            echo '
            <button class="loginBTN" onclick="window.location.href=\'login.html\'">
              <div class="wrapper">
                <span>Login</span>
                <div class="circle circle-12"></div>
                <div class="circle circle-11"></div>
                <div class="circle circle-10"></div>
                <div class="circle circle-9"></div>
                <div class="circle circle-8"></div>
                <div class="circle circle-7"></div>
                <div class="circle circle-6"></div>
                <div class="circle circle-5"></div>
                <div class="circle circle-4"></div>
                <div class="circle circle-3"></div>
                <div class="circle circle-2"></div>
                <div class="circle circle-1"></div>
              </div>
            </button>
            ';
        }
        ?>
      </div>
    </nav>
  </header>
    <header class="upper container-fluid bg-red pt-6">
      <img class="watermark" src="../images/waves-icon.png" alt="wave-big">
      <div class="z-2 container max-w-80 w-90">
        <div class="container flex-col ai-c mb-5">
          <div class="brand-name--lg-w w-mc">Harmony House</div>
          <h1 class="co-w f-hl">
            Your marketplace for buying and selling Musical Instruments
          </h1>
        </div>
        <div class="search container-fluid ai-c jc-sb w-100">
          <div class="search-top h-search ai-c">
            <div class="search__dropdown bg-white h-100 w-20 bord-r-red ai-c pl-1 pr-3 d-none d-md-flex">
              <div class="search__dropdown-icon co-dt m-2" onclick="toggleDropdown()">
                <i class="fas fa-caret-down"></i>
              </div>
              <div class="search__dropdown-text co-dt f-gl">Instruments</div>
              <div id="dropdownOptions" class="dropdown-options d-none">
                <div class="dropdown-option" onclick="selectOption('Guitar')">Guitar</div>
                <div class="dropdown-option" onclick="selectOption('Piano')">Piano</div>
                <div class="dropdown-option" onclick="selectOption('Violin')">Violin</div>
                <!-- Add more options here -->
              </div>
            </div>
            
            
            <div
              class="search__question bg-white h-100 bord-r-red co-l ai-c f-gl pl-2"
            >
              What do you search for?
            </div>
            <input
              type="text"
              placeholder="Search"
              class="search__input h-100 co-l"
            />
          </div>
          <div class="search-btn-div h-100">
            <a href="https://ldelbel.github.io/music-store-website/search.html"><div class="search__button btn-dark w-100 ai-c jc-c">Search</div></a>
          </div>
        </div>
      </div>
    </header>
    <main>
      <div class="hotads py-3 co-l f-hm">
        <div class="hotads-cont container ai-c h-100 px-0">
          <div class="hotads__arrow_circle round w-mc ai-c jc-c co-r d-none d-md-flex">
            <i class="fas fa-chevron-left"></i>
          </div>

          <div class="hotads__main flex-col w-90 center h-100 px-3">
            <div class="hotads__main_title pb-3">HOTADS</div>
            <div class="hotads__main_content jc-sb">
              <div class="hotads__main_content-img"></div>
              <div class="hotads__main_content-info py-3">
                <h3 class="co-r f-hm">Flamenco Guitar - Cordoba C5</h3>
                <div class="fixed-p">

                <p class="fixed-p f-hl co-d">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Reprehenderit alias tempora officia molestiae assumenda
                  ratione debitis ipsum explicabo voluptates nemo, sequi fugiat
                  ex animi mollitia enim numquam totam, tempore ut?
                </p>
                </div>
                <p class="co-d">By: <span class="co-l f-hl">John Doe</span></p>
                <p class="mb-0 co-d">
                  Location: <span class="co-l f-hl">Caraguatatuba, BR</span>
                </p>
                <div class="hotads__main_content-info-button w-mc ai-c mt-2">
                  <button type="button" class="btn-red m-0 center ai-c py-2">$1050</button>
                  <button type="button" class="btn-red mx-0 ai-c">
                    <i class="fas fa-shopping-cart mr-2"></i>
                    <span>Purchase Details</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          
          <div class="hotads__arrow_circle round w-mc ai-c jc-c co-r d-none d-md-flex">
            <i class="fas fa-chevron-right"></i>
          </div>
        </div>
      </div>

      <div class="products bg-lighter py-4">
        <div class="products__display w-90 center">
          <div class="products__display__header ai-c mb-3 co-d">
            <i class="fas fa-guitar mr-4 co-l" id="guitar_logo"></i>
            <h5>Guitars</h5>
            <p class="my-0 ml-5 co-l f-hl">
             
            </p>
          </div>
          <div class="products__display__cards ai-c jc-sb">
            <div class="products__display__cards-item">
          
                <div class="products__display__cards-item--img h-50" id="image1"></div>
                
                <div class="products__display__cards-item--content h-50 mx-3 pt-3" >
                  <h6 class="co-dt">Classic Guitars</h6>
                </div>
            </div>
      
     
            <div class="products__display__cards-item">
              <a href="acoustic_guitars_page.html">
                <div class="products__display__cards-item--img h-50" id="image2"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Acoustic Guitars</h6>
                </div>
              </a>
            </div>
            <div class="products__display__cards-item">
              <a href="acoustic_eq_guitars_page.html">
                <div class="products__display__cards-item--img h-50" id="image3"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Ukulele</h6>
                </div>
              </a>
            </div>
            <div class="products__display__cards-item">
              <a href="bass_guitars_page.html">
                <div class="products__display__cards-item--img h-50" id="image4"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Bass Guitars</h6>
                </div>
              </a>
            </div>
            <div class="products__display__cards-item">
              <a href="electric_guitars_page.html">
                <div class="products__display__cards-item--img h-50" id="image5"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Electric Guitars</h6>
                </div>
              </a>
            </div>
          </div>
        </div>
      
    
          <div class="products__display w-90 center mt-5">
            <div class="products__display__header ai-c mb-3 co-d">
              <i class="fas fa-guitar mr-4 co-l"></i>
              <h5>Pianos & Keyboards</h5>
              <p class="my-0 ml-5 co-l f-hl"></p>
            </div>
          
            
            <div class="products__display__cards ai-c jc-sb">
              <div class="products__display__cards-item">
                <div class="products__display__cards-item--img h-50" id="image6"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Digital Piano & Keyboard</h6>
                </div>
              </div>
          
              <div class="products__display__cards-item">
                <div class="products__display__cards-item--img h-50" id="image7"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Upright Piano</h6>
                </div>
              </div>
          
          
              
              <div class="products__display__cards-item">
                <div class="products__display__cards-item--img h-50" id="image8"></div>
                <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                  <h6 class="co-dt">Grand Piano</h6>
                </div>
              </div>
            </div>
          </div>
              
            
          
          
        <div class="products__display w-90 center">
          <div class="products__display__header ai-c mb-3 co-d">
            <i class="fas fa-guitar mr-4 co-l"></i>
            <h5>Violins</h5>
            <p class="my-0 ml-5 co-l f-hl">
            
            </p>
          </div>
          <div class="products__display__cards ai-c jc-sb">
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image9"></div>
              <div
                class="products__display__cards-item--content h-50 mx-3 pt-3"
              >
                <h6 class="co-dt">Classical Violins</h6>
                
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image10"></div>
              <div
                class="products__display__cards-item--content h-50 mx-3 pt-3"
              >
                <h6 class="co-dt">Electrical Violins</h6>
               
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image11"></div>
              <div
                class="products__display__cards-item--content h-50 mx-3 pt-3"
              >
                <h6 class="co-dt">Baroque Violin</h6>
               
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image12"></div>
              <div
                class="products__display__cards-item--content h-50 mx-3 pt-3"
              >
                <h6 class="co-dt">Fiddle</h6>
               
              </div>
            </div>
            
          </div>
        </div>

        <div class="products__display w-90 center mt-5">
          <div class="products__display__header ai-c mb-3 co-d">
            <i class="fas fa-guitar mr-4 co-l"></i>
            <h5>Saxophone</h5>
            <p class="my-0 ml-5 co-l f-hl"></p>
          </div>
        
          
          <div class="products__display__cards ai-c jc-sb">
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image17"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Alto Saxophone</h6>
              </div>
            </div>
        
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image18"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Tenor Saxophone</h6>
              </div>
            </div>
        
        
            
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image19"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Soprano Saxophone</h6>
              </div>
            </div>
          </div>
        </div>

        <div class="products__display w-90 center mt-5">
          <div class="products__display__header ai-c mb-3 co-d">
            <i class="fas fa-guitar mr-4 co-l"></i>
            <h5>Clarinet</h5>
            <p class="my-0 ml-5 co-l f-hl"></p>
          </div>
      
        <div class="products__display__cards ai-c jc-sb">
          <div class="products__display__cards-item">
            <div class="products__display__cards-item--img h-50" id="image20"></div>
            <div class="products__display__cards-item--content h-50 mx-3 pt-3">
              <h6 class="co-dt">E♭ Clarinet</h6>
            </div>
          </div>
          
                  
        <div class="products__display__cards ai-c jc-sb">
          <div class="products__display__cards-item">
            <div class="products__display__cards-item--img h-50" id="image21"></div>
            <div class="products__display__cards-item--content h-50 mx-3 pt-3">
              <h6 class="co-dt">B♭ Clarinet</h6>
            </div>
          </div>
        
          <div class="products__display__cards ai-c jc-sb">
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image22"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Bass Clarinet</h6>
              </div>
            </div>
           </div>
           </div>



        <div class="products__display w-90 center mt-5 mb-4">
          <div class="products__display__header ai-c mb-3 co-d">
            <i class="fas fa-guitar mr-4 co-l"></i>
            <h5>Flutes</h5>
            <p class="my-0 ml-5 co-l f-hl">
             
            </p>
          </div>
          <div class="products__display__cards ai-c jc-sb">
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image13"></div>
              <div
                class="products__display__cards-item--content h-50 mx-3 pt-3"
              >
                <h6 class="co-dt">Soprano Flute</h6>
               
                <div class="ai-c jc-sb mt-2">
                  
                </div>
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image14"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Bass Flute</h6>
               
                
                <div class="ai-c jc-sb mt-2">
                 
                </div>
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image15"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Plastic Flute</h6>
               
              </div>
            </div>
            <div class="products__display__cards-item">
              <div class="products__display__cards-item--img h-50" id="image16"></div>
              <div class="products__display__cards-item--content h-50 mx-3 pt-3">
                <h6 class="co-dt">Treble Flute</h6>
               
                </div>
             </div>
          </div>
        </div>
</div>

            


         
            

        </div>
      </div>
    </div>
    </main>
    <footer>
      <div class="footer__main h-80 w-90 center jc-sb pt-4">
        <div class="footer__main__about px-3">
          <div class="footer__main__about__logo">
            <div class="ai-c jc-c mb-3">
              <div class="footer__logo mr-3">
                <img
                  class="footer__logo__img"
                  src="../images/H_Black.png"
                  alt="waves-icon"
                />
              </div>
              <div class="footer__logo__name brand-name--sm-w">Harmony House</div>
            </div>
          </div>
          <p class="co-l f-hl">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi unde
            quisquam quibusdam molestiae eos sit odit dolor totam vel minima
            quam modi sint, tempora numquam cum, commodi itaque sed soluta?
          </p>
        </div>
        <div class="footer__main__categories px-3">
          <div class="footer__main--title">CATEGORIES</div>
          <div class="jc-sb">
            <ul class="links">
              <li><a aria-label="this is a button" href="#">Guitars</a></li>
              <li><a aria-label="this is a button" href="#">Violins</a></li>
              <li><a aria-label="this is a button" href="#">Flutes</a></li>
              <li><a aria-label="this is a button" href="#">Pianos</a></li>
              <li><a aria-label="this is a button" href="#">Percussion</a></li>
              <li><a aria-label="this is a button" href="#">Equipments</a></li>
            </ul>
            <ul class="links">
              <li><a aria-label="this is a button" href="#">Guitars</a></li>
              <li><a aria-label="this is a button" href="#">Violins</a></li>
              <li><a aria-label="this is a button" href="#">Flutes</a></li>
              <li><a aria-label="this is a button" href="#">Pianos</a></li>
              <li><a aria-label="this is a button" href="#">Percussion</a></li>
              <li><a aria-label="this is a button" href="#">Equipments</a></li>
            </ul>
          </div>
        </div>
        <div class="footer__main__navigation px-3">
          <div class="footer__main--title">NAVIGATION</div>
          <ul class="links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Sign In</a></li>
            <li><a href="#">Sign Up</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Help</a></li>
          </ul>
        </div>
        <div class="footer__main__options px-3 flex-col jc-c">
          <div class="footer__main__options--item jc-sb ai-c">
            <span class="co-r f-gb w-50">COUNTRY</span>
            <button type="button" class="btn-transparent w-50">Brazil</button>
          </div>
          <div class="footer__main__options--item jc-sb ai-c my-2">
            <span class="co-r f-gb w-50">LANGUAGE</span>
            <button type="button" class="btn-transparent w-50">Portuguese</button>
          </div>
          <div class="footer__main__options--item jc-sb ai-c">
            <span class="co-r f-gb w-50">CURRENCY</span>
            <button type="button" class="btn-transparent w-50">BRL</button>
          </div>
        </div>
      </div>
      <div class="footer__bottom ai-c jc-sb px-6">
        <div class="footer__bottom__copyright co-l">
          Copyright© 2020 wavvesmusic.com. All Rights Reserved. Inspired by
          Mohammed Awad's Zattix Design. Made by Lucas Delbel.
        </div>
        <div class="footer__bottom__social">
          <a aria-label="this is a button" href="#"><i class="fab fa-facebook-f"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-twitter"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-linkedin-in"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-github-alt"></i></a>
          <a aria-label="this is a button" href="#"><i class="fab fa-stack-overflow"></i></a>
        </div>
      </div>
    </footer>
  </body>
</html>
