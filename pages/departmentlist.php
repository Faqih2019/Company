<h4 class="judul">
    <span class="text">
        <strong> DEPARTMENT LIST</strong></span>
</h4>

<a class="btn btn-primary" href="index.php?p=department">Add</a>
<table class="table table-bordered">
<thead>
<tr>
<th>Department Name</th>
<th>Department Number</th>
<th>Manager SSN</th>
<th>Manager Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php
require_once('./class/class.Department.php');
$objDepartment = new Department();
$arrayResult = $objDepartment->SelectAllDepartment();
if(count($arrayResult) == 0){
echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
}else{
$no = 1;
foreach ($arrayResult as $dataDepartment) {
echo '<tr>';
echo '<td>'.$dataDepartment->dname.'</td>';
echo '<td>'.$dataDepartment->dnumber.'</td>';
echo '<td>'.$dataDepartment->mgr_ssn.'</td>';
echo '<td>'.$dataDepartment->mgr_start_date.'</td>';
echo '<td>
<a class="btn btn-warning"
href="index.php?p=department&dnumber=' . $dataDepartment->dnumber . '"> Edit </a> |
<a class="btn btn-danger"
href="index.php?p=deletedepartment&dnumber=' . $dataDepartment->dnumber . '" onclick="return confirm(\'Apakah anda yakin ingin menghapus?\')"> Delete </a></td>';
echo '</tr>';
$no++;
}
}
?>
</tbody>
</table>