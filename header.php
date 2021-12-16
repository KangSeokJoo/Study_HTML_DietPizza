<div id="wrap">
      <header id="navbar" class="header nav">

        <div class="top-menu">
          <div>
           <h1><a href="#" class="logo"></a></h1>
           <div class="menu-container">
             <ul id="menu" class="gnb-menu">
            <li><a  class="menu1" onclick="visibleRadio()">주문하기</a></li>
            <li><a href="#" title="menu2">메뉴소개</a>
              <ul class="sub-menu">
                <li class=""><a href="menu1.php"><span>비건 채식인</span></a></li>
                <li class=""><a href="https://www.naver.com/"><span>락토 채식인</span></a></li>
                <li class=""><a href="https://www.daum.com/"><span>고기파티</span></a></li>
                <li class=""><a href="https://www.google.com/"><span>스폐셜메뉴</span></a></li>
                <li class=""><a href="https://www.daelim.ac.kr/hme/main.do/"><span>사이드</span></a></li>
              </ul>
            </li>
            <li><a href="#" title="menu3">이벤트</a></li>
            <li><a href="#" title="menu4">매장안내</a></li>
            <li><a href="#" title="menu5">프렌차이즈</a></li>
          </ul> 
           </div>
          </div>
        </div>
        <div class="order">
          <div id="floatMenu" style="display: block;">
          - 상단 메뉴의 "주문하기" 를 눌르면 창이 사라집니다. - 
         <div class="order-text">카테고리 &nbsp; &nbsp;&nbsp;
            <a><img src="img/type1.jpg" class="order-type-act"></a>
            <a><img src="img/type2.jpg" class="order-type" onclick="alert('지금은 락토피자의 재고가 다 떨어졌습니다.')", style="cursor: pointer"></a>
            <a><img src="img/type3.jpg" class="order-type" onclick="alert('지금은 고기파티피자의 재고가 다 떨어졌습니다.')", style="cursor: pointer"></a>
            <a><img src="img/type4.jpg" class="order-type" onclick="alert('지금은 스폐셜피자의 재고가 다 떨어졌습니다.')", style="cursor: pointer"></a>
          </div>
          <div class="order-text">
            <form>
              수량 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type=text name=amount value=1>
              <input type=button value="추가" onClick="javascript:this.form.amount.value++;">
              <input type=button value="빼기" onClick="javascript:this.form.amount.value--;">
              </form>

          <div class="order-text">
            <form>
              가격 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="chk_info" value="R"> R 28,500
                <input type="radio" name="chk_info" value="L"> L 36,500
            </form>
          </div>
            <br><br><br>  
            <a class="order-btn" onclick="alert('지금은 주문가능한 시간이 아닙니다.')", style="cursor: pointer">주문하기</a>
          </div>
        </div>
      </header>