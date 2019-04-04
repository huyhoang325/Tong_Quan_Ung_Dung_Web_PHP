<?php
    if (isset($_POST['submit'])){
        $dauTu = $_POST["num1"];
        $laiSuat = $_POST["num2"];
        $soNam = $_POST["num3"];
        $ketQua = $dauTu + ($dauTu * $laiSuat * 0.01);
    }
    echo "<table>
 			<thead>
 				<tr>
 					<th>Máy tính giá trị tương lai</th>
 				</tr>
 			</thead>
 			<tbody>
 				<tr>
 					<td><span style='color:red'>Số tiền đầu tư: $dauTu</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Lãi suất hằng năm: $laiSuat %</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Số năm: $soNam</span></td>
 				</tr>
 				<tr>
 					<td><span style='color:red'>Giá trị tương lai: $ketQua</span></td>
 				</tr>
 			</tbody>
 		</table>"
?>