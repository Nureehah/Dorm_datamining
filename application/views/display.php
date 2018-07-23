

    <section class="content">
        <div class="container-fluid">
           
            <div class="row clearfix">
               
                        <div class="header">
                        <div class="card">
                      
                        <div class="card">
                        <div class="header">
                            <h2>
                                	ผลการวิเคราะห์รูปแบบการจัดคนเข้าห้องพัก
                            </h2>
                           
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <tbody>
                                     <?php $i=1; foreach ($show_res as $row){?>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?php echo $row->output; ?></td>
                         
                           
                            </td>
                          </tr>
                          <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                          
                           
                        <input style="position: absolute; top: 304px; left: 588px; padding: 10px; text-align: start; font-style: normal; font-variant: normal; font-weight: 400; font-stretch: normal; font-size: 14px; line-height: 20px; font-family: Roboto, Arial, Tahoma, sans-serif; width: 143px; height: 41px; display: none; border-width: 1px 0px; border-style: solid none; border-color: rgb(238, 238, 238) rgb(85, 85, 85);"></div>
                    </div>
                       
                           
                           
                       
                      
                </div>
            </div>
            
        </div>
    </section>

   