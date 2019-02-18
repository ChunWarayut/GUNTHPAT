
<form id="form_target" role="form" method="post" action="index.php?content=contact&action=insert_title">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-6">
                    <h1>
                        หน้าเพิ่มข้อมูล 
                        
                    </h1>
                </div>
                <div class="col-lg-6">

                    <button type="submit" class="btn btn-primary float-right">เพิ่ม</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <input type="hidden" id="contact_title_id" name="contact_title_id" value="" />

            <div class="col-12">

            </div>
            <div class="row ">
               
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Title TH <font color="#F00"><b>*</b></font></label>
                                <input id="contact_title_name_th" name="contact_title_name_th" class="form-control" value="" />
                                <p class="help-block">Example : Title </p>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Title EN <font color="#F00"><b>*</b></font></label>
                                <input id="contact_title_name_en" name="contact_title_name_en" class="form-control" value="" />
                                <p class="help-block">Example : Title </p>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</form>