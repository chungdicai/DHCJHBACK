<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>我的收藏</title>
    <link rel="stylesheet" href="css/memberCollection.css" />
    <!-- font awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <?php require_once("php/header.php");?>
    <?php require_once("php/loginLightBox.php");?>
    <?php require_once("php/components/_connectDHC.php"); ?>
    <!-- 並排 -->
    <div class="wrap">
      <?php require_once("php/memberTopNav.php");?>
      <!-- 我的收藏Card -->
      <article class="cardGroup col-md-10">
        <div class="cardGroupWidth">
          <section class="card">
              <div class="font">
                  <div class="topArea">
                      <div class="headImg">
                          <img src="images/member/member.jpg" alt="">
                      </div>
                      <h3>Lilian</h3>
                  </div>
                  <div class="stageImg">
                    <img src="images/stage_full.png" alt="">
                  </div>
                  <div class="toolBar">
                    <i class="fas fa-heart"></i>
                    <span>155個喜歡</span>
                    <i class="fas fa-share"></i>
                    <i class="fas fa-ellipsis-h"></i>
                  </div>  
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
          <section class="card">
              <div class="font">
                 <div class="topArea">
                      <div class="headImg">
                          <img src="images/member/member.jpg" alt="">
                      </div>
                      <h3>Lilian</h3>
                  </div>
                  <div class="stageImg">
                    <img src="images/stage_full.png" alt="">
                  </div>
                  <div class="toolBar">
                    <i class="fas fa-heart"></i>
                    <span>155個喜歡</span>
                    <i class="fas fa-share"></i>
                    <i class="fas fa-ellipsis-h"></i>
                  </div>
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
          <section class="card">
                <div class="font">
                   <div class="topArea">
                      <div class="headImg">
                          <img src="images/member/member.jpg" alt="">
                      </div>
                      <h3>Lilian</h3>
                  </div>
                  <div class="stageImg">
                    <img src="images/stage_full.png" alt="">
                  </div>
                  <div class="toolBar">
                    <i class="fas fa-heart"></i>
                    <span>155個喜歡</span>
                    <i class="fas fa-share"></i>
                    <i class="fas fa-ellipsis-h"></i>
                  </div>
                </div>
                <div class="back">
                  <div class="centerBox">
                      <div class="unlike">取消追蹤</div>
                      <div class="return">返回</div>
                  </div>
                </div>
          </section>
          <section class="card">
              <div class="font">
                  <div class="topArea">
                    <div class="headImg">
                        <img src="images/member/member.jpg" alt="">
                    </div>
                    <h3>Lilian</h3>
                </div>
                <div class="stageImg">
                  <img src="images/stage_full.png" alt="">
                </div>
                <div class="toolBar">
                  <i class="fas fa-heart"></i>
                  <span>155個喜歡</span>
                  <i class="fas fa-share"></i>
                  <i class="fas fa-ellipsis-h"></i>
                </div>
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
          <section class="card">
              <div class="font">
                 <div class="topArea">
                    <div class="headImg">
                        <img src="images/member/member.jpg" alt="">
                    </div>
                    <h3>Lilian</h3>
                </div>
                <div class="stageImg">
                  <img src="images/stage_full.png" alt="">
                </div>
                <div class="toolBar">
                  <i class="fas fa-heart"></i>
                  <span>155個喜歡</span>
                  <i class="fas fa-share"></i>
                  <i class="fas fa-ellipsis-h"></i>
                </div>
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
          <section class="card">
              <div class="font">
                 <div class="topArea">
                    <div class="headImg">
                        <img src="images/member/member.jpg" alt="">
                    </div>
                    <h3>Lilian</h3>
                </div>
                <div class="stageImg">
                  <img src="images/stage_full.png" alt="">
                </div>
                <div class="toolBar">
                  <i class="fas fa-heart"></i>
                  <span>155個喜歡</span>
                  <i class="fas fa-share"></i>
                  <i class="fas fa-ellipsis-h"></i>
                </div>
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
          <section class="card">
              <div class="font">
                 <div class="topArea">
                    <div class="headImg">
                        <img src="images/member/member.jpg" alt="">
                    </div>
                    <h3>Lilian</h3>
                </div>
                <div class="stageImg">
                  <img src="images/stage_full.png" alt="">
                </div>
                <div class="toolBar">
                  <i class="fas fa-heart"></i>
                  <span>155個喜歡</span>
                  <i class="fas fa-share"></i>
                  <i class="fas fa-ellipsis-h"></i>
                </div>
              </div>
              <div class="back">
                <div class="centerBox">
                    <div class="unlike">取消追蹤</div>
                    <div class="return">返回</div>
                </div>
              </div>
          </section>
        </div>
      </article>
    </div>


    <script>
      /* 點擊旋轉到背面 */
      let dots = document.querySelectorAll('.fa-ellipsis-h');
      for (let i = 0; i < dots.length; i++) {
        let backs = document.querySelectorAll('.back');
        dots[i].addEventListener('click',function(e){
        e.target.parentNode.parentNode.style.transform =` perspective(1200px) rotateY(180deg) `;
        backs[i].style.transform = ` perspective(1200px) rotateY(360deg) `;
        });
      }
      let returns =  document.querySelectorAll('.return');
      for (let i = 0; i < returns.length; i++) {
        let fonts = document.querySelectorAll('.font');
        let backs = document.querySelectorAll('.back');
        returns[i].addEventListener('click',function(){
        fonts[i].style.transform = ` perspective(1200px) rotateY(0deg) `;
        backs[i].style.transform =` perspective(1200px) rotateY(180deg) `;
        });
      }

      /* 點擊取消訂閱 */
      let unlikes = document.querySelectorAll('.unlike');
      for (let i = 0; i < unlikes.length; i++) {
        let cards = document.querySelectorAll('.card');
        unlikes[i].addEventListener('click',function(){
          cards[i].style.display = `none`;
        });
      }
    </script>

  </body>
</html>
