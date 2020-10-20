<div class="col-lg-3 order-lg-1 order-2">
    <!-- widget-categories -->
    <aside class="widget widget-categories box-shadow mb-30">
        <h6 class="widget-title border-left mb-20">MENU</h6>
        <div id="cat-treeview" class="product-cat">
            <ul>
                <li class="closed"><a href="#">요금제/보조금 수정</a>
                    <ul>

                      <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=plan&sub=planList">요금제 변경</a></li>
                      <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=fund&sub=fundList">공시지원금 변경</a></li>
                      <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=fund&sub=addfundList">추가지원금 변경</a></li>
                      <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=plan&sub=installment_interest">할부이자 수정</a></li>
                      </ul>
                </li>
                <li class="open"><a href="#">단말기 수정</a>
                    <ul>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=device&sub=addDevice">단말기 추가</a></li>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=device&sub=deviceList&manufacturer=1">단말기 변경</a></li>
                    </ul>
                </li>
                <li class="open"><a href="#">회원 관리</a>
                    <ul>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=company&sub=addCompany">사업자 추가</a></li>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=company&sub=companyList&grade=0">사업자 정보변경</a></li>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=user&sub=userList&request=0">사용자 목록</a></li>
                    </ul>
                </li>
                <li class="open"><a href="#">공지사항 관리</a>
                    <ul>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=notice&sub=addNotice">공지사항 추가</a></li>
                        <li><a href="<?php $_SERVER['DOCUMENT_ROOT'] ?>/pg/admin/menu.php?dir=notice&sub=noticelist">공지사항 변경</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>
</div>
