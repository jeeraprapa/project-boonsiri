<section id="schedule">
    <div class="container text-center">
        <h2 class="h1">ตารางเดินเรือ</h2>
        <p class="heading-text">ตารางแสดงรอบเรือวันนี้ ตรวจสอบรอบว่างได้ทันที</p>
        <div class="form-row">
            <div class="col-4 text-right">
                <label for="start">ต้นทาง</label>
            </div>
            <div class="col-4">
                <input type="text" id="start" name="start" class="form-control" placeholder="กรุงเทพ">
                <small>กรุณาเลือกต้นทางเพื่อตรวจสอบรอบเวลาเดินทาง / หรือคลิกดูทั้งหมด</small>
            </div>
        </div>
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                <tr>
                    <th>ต้นทาง</th>
                    <th></th>
                    <th>ปลายทาง</th>
                    <th>เวลาออกเดินทาง</th>
                    <th>เวลาถึง</th>
                    <th>ราคา</th>
                    <th>สถานะที่นั่งว่าง วันนี้</th>
                    <th>จองด่วน</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>กรุงเทพ</td>
                    <td>
                        <i class="fa fa-bus"></i> + <i class="fa fa-ship"></i>
                    </td>
                    <td>เกาะกูด</td>
                    <td>05.00</td>
                    <td>12.00</td>
                    <td>500</td>
                    <td>
                        <span class="label label-success">ว่าง</span>
                    </td>
                    <td>
                        <a class="btn btn-success">
                            จองทันที <span class="badge badge-danger">Hot</span>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>กรุงเทพ</td>
                    <td>
                        <i class="fa fa-bus"></i> + <i class="fa fa-ship"></i>
                    </td>
                    <td>เกาะกูด</td>
                    <td>05.00</td>
                    <td>12.00</td>
                    <td>500</td>
                    <td>
                        <span class="label label-danger">เต็ม</span>
                    </td>
                    <td>
                        <a class="btn disabled" >
                            จองทันที
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>กรุงเทพ</td>
                    <td>
                        <i class="fa fa-ship"></i>
                    </td>
                    <td>เกาะกูด</td>
                    <td>10.45</td>
                    <td>12.00</td>
                    <td>500</td>
                    <td>
                        <span class="label label-success">ว่าง</span>
                    </td>
                    <td>
                        <a class="btn btn-success">
                            จองทันที
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>