<footer class="section footer-classic context-dark">
        <div class="container">
          <div class="row row-50">
            <div class="col-lg-8 order-lg-2 pl-xl-5 wow-outer">
              <div class="wow slideInRight">
                <div class="row row-50">
                  <!--<div class="col-12">
                    <h5 class="footer-title">Subscribe & Stay Updated</h5>
                    <form class="rd-mailform text-left rd-form-inline" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                      <div class="form-wrap">
                        <label class="form-label" for="subscribe-email">E-mail</label>
                        <input class="form-input" id="subscribe-email" type="email" name="email" data-constraints="@Email @Required">
                      </div>
                      <div class="form-button group-sm text-center text-lg-left">
                        <button class="button button-lg button-white-outline" type="submit">subscribe</button>
                      </div>
                    </form>
                  </div>-->
                  <div class="col-md-6">
                    <h5 class="footer-title">Contacts</h5>
                    <ul class="list-contact-info">
                      <li><span class="icon mdi mdi-map-marker icon-md icon-secondary"></span><span class="list-item-text">Wilmington, DE, United States</span></li>
                      <li><span class="icon mdi mdi-phone icon-md icon-secondary"></span><span class="list-item-text"><a href="tel:3473193533">(347) 319-3533</a></span></li>
                    </ul>
                  </div>
                  <div class="col-md-6">
                    <h5 class="footer-title">Get Social</h5>
                    <p class="big">Follow us to stay connected and receive instant updates.</p>
                    <ul class="social-list">
                      <?php
                      if($facebook_link != ''){
                        echo '<li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-facebook" href="<? echo $facebook_link; ?>"></a></li>';
                      }
                      if($instagram_link != ''){
                        echo '<li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-instagram" href="<? echo $instagram_link; ?>"></a></li>';
                      }
                      if($twitter_link != ''){
                        echo '<li><a class="icon icon-sm icon-circle icon-circle-md icon-bg-white fa-twitter" href="<? echo $twitter_link; ?>"></a></li>';
                      }
                      ?>
                    </ul>
                  </div>
                  <div class="col-12 text-center">
                    <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Sophisticated Decorating Concepts</span><span>.&nbsp;</span><span> Design&nbsp;by&nbsp;<a href="https://ignition-innovations.com/" target="_blank">Ignition Innovations</a></span></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 order-lg-1 pr-xl-5 wow-outer">
              <div class="wow slideInLeft">
                <div class="row row-30">
                  <div class="col-12 text-center"><a href="index.php"><img src="global/img/sdc-white.png" alt="" style="width:50%;margin:auto;"/></a></div>
                  <div class="col-12">
                    <p>Sophisticated Decorating Concepts provides a focused approach towards the event decorating segment. With years of experience in the event industry, we stand on a stronger base with the most creative, enthusiastic and committed team.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>