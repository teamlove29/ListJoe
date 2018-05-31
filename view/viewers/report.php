    <articel>


            <header>
                    <div class=" text-white text-center top">
                        <div class="bg-gold p-3">
                            <h1 class="text-info p-3">แจ้งรายชื่อคนโกง</h1>
                            <p class="text-white">ขอขอบคุณที่เป็นส่วนนึงในการแจ้ง</p>
                        </div>
                    </div>
        <section>
        
        <form id='myform2' name='myform2'>
            <div class="container">
                <!-- กรอกข้อมูล -->
                <div class="form-group row text-right">
                    <label for="ID" class="text-white col-xl-3 col-4">รหัสบัตรประชาชน</label>
                    <input type="text" ng-model='id_card' name='id_card' id='id_card' class='form-control col-xl-7 col-7' placeholder="บัตรประชาชน">
                    <div class="col-xl-2 col-1"></div>

                    <label for="Money" class="text-white col-xl-3 col-4 mt-2">เลขบัญชี</label>
                    <input type="text" ng-model='acc_num' name='acc_num' id='acc_num' class='form-control col-xl-7 col-7 mt-2' placeholder="เลขบัญชี">
                    <div class="col-xl-2 col-1"></div>

                    <label for="tel" class="text-white col-xl-3 col-4 mt-2">เบอร์โทร</label>
                    <input type="text" ng-model='tel'name='tel' id='tel' class='form-control col-xl-7 col-7 mt-2' placeholder="เบอร์โทร">
                    <div class="col-xl-2 col-1"></div>
                </div>
                <!-- อัพโหลดหลักฐาน -->
                        <div class="form-group row text-white ">
                            <div class="input-group">
                                <span class="input-group-btn col-xl-3 col-4 text-right">
                                    </span>
                                </span>
                                <input type='file' id ='pic' name='pic[]' multiple>
                            </div>
                        </div>


                    <!-- ส่งรายชื่อ -->
                    <div class="form-group row">
                    <div class="col-4 col-md-4 col-xl-5"></div>
                    
                        <input type="submit" name='submit' value="ส่งรายชื่อ" class="col-4 col-md-4 col-xl-2 mt-3  screen_btn_link">
                    <div class="col-4 col-md-4 col-xl-5"></div>
                </div>
            </div>
        </form>
        

        
        </section>
    </articel>

