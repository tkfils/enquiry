<?php
$preamble = "";
$preamble .= "<!DOCTYPE html>\n";
$preamble .= "<html lang='en'>\n";
$preamble .= "  <head>\n";
$preamble .= "    <meta charset=\"utf-8\">\n";
$preamble .= "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n";
$preamble .= "    <meta name=\"description\" content=\"\">\n";
$preamble .= "    <meta name=\"author\" content=\"\">\n";
$preamble .= "    <title>Enquiry database</title>\n";
$preamble .= "<script src=\"../jquery/jquery-3.3.1.min.js\"></script>\n";
$preamble .= " <script src=\"../bootstrap/bootstrap.js\"></script>\n";
$preamble .= "    <!-- Bootstrap core CSS -->\n";
$preamble .= "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\n";
$preamble .= "    <!-- Custom styles for this template -->\n";
$preamble .= "    <style>\n";
$preamble .= "      body {\n";
$preamble .= "        padding-top: 54px;\n";
$preamble .= "      }\n";
$preamble .= "      \@media (min-width: 992px) {\n";
$preamble .= "        body {\n";
$preamble .= "          padding-top: 56px;\n";
$preamble .= "        }\n";
$preamble .= "      }\n";
$preamble .= "    </style>\n";
$preamble .= "      <script src = \"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>";
$preamble .= "  </head>\n";
$preamble .= "  <body>\n";
$preamble .= "<nav class=\"navbar navbar-inverse navbar-fixed-top\">";
$preamble .= "<div class=\"container-fluid\">";
$preamble .= "<div class=\"navbar-header\">";
$preamble .= "<a class=\"navbar-brand\" href=\"index.html\">ENQUIRY DATABASE</a>";
$preamble .= "</div>";
$preamble .= "<ul class=\"nav navbar-nav\">";
$preamble .= "<li><a href=\"index.html?new=true\">New enquiry</a></li>";
$preamble .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FGeneral%20enquiry%20response%7Cf6221d06-c5e2-44a0-bdce-dd390496c67c%2F%29&wdorigin=703\">General response template</a></li>"; 
$preamble .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FProject%20funding%20request%20response%7C48c42742-05f9-4cf0-a264-6681b09ceba2%2F%29&wdorigin=703\">Project funding response</a></li>";
$preamble .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FAcademic%20funding%20request%20response%7C17534623-1a5c-4575-b1ce-3228669611ad%2F%29&wdorigin=703\">Academic funding response</a></li>";
$preamble .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FPatient%20complaint%20response%7C521c9488-df3e-4665-8ad7-2ca7df830bd3%2F%29&wdorigin=703\">Patient complaint response</a></li>";
$preamble .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FInternship%20and%20work%20experience%20response%7C0301f17a-e6e6-460d-8207-08b5b4b7f65d%2F%29&wdorigin=703\">Internship response</a></li>";
$preamble .= "</ul>";
$preamble .= "</div>";
$preamble .= "</nav>";

echo $preamble;
$con = mysqli_connect("localhost", "db", "user","pass");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
$qstatus = $_POST['qstatus'];
$qformat = $_POST['qformat'];
$query = $_POST['query'];
$utype = $_POST['utype'];
$uname = $_POST['uname'];
$sdate = $_POST['start_date'];
$edate = $_POST['end_date'];
$subject = $_POST['subject'];
$legible_string = "You searched for ";
$joiner=0;
$query_string="SELECT e.id, question, answer, date(submitted_es) as completed_es";
if (!empty($query)){
$query_string .= ", ((1.6 *(MATCH (`answer`) AGAINST ('$query' IN BOOLEAN MODE))) + ((1.3 *MATCH (`question`) AGAINST ('$query' IN BOOLEAN MODE)))) AS relevance_1";
}
$query_string .= " from enquiry e ";

if (!empty($subject)){
$query_string .= ", subject_links l ";
}
$query_string .= "WHERE ";
if (!empty($query)){
$query_string .= " (MATCH (`answer`) AGAINST ('$query' IN BOOLEAN MODE))";
$legible_string .= "QUERY: ".$query." ";
$joiner=1;
}
if (!empty($qstatus)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "STATUS: ".$qstatus." ";
$joiner=1;
$query_string .= "status = '$qstatus' ";
}
if (!empty($qformat)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "FORMAT: ".$qformat." ";
$joiner=1;
$query_string .= "enquiry_source = '$qformat' ";
}

if (!empty($utype)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "TYPE: ".$utype." ";
$joiner=1;
$query_string .= "enquirer_category = '$utype' ";
}

if (!empty($uname)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "NAME: ".$uname." ";
$joiner=1;
$query_string .= "enquirer_name = '$uname' ";
}

if (!empty($sdate)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "START_DATE: ".$sdate." ";
$joiner=1;
$query_string .= "submitted_es >= '$sdate' ";
}

if (!empty($edate)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "END_DATE: ".$edate." ";
$joiner=1;
$query_string .= "submitted_es <= '$edate' ";
}

if (!empty($subject)){
if ($joiner==1){
$query_string .= " AND ";
}
$legible_string .= "SUBJECT: ".$subject." ";
$joiner=1;
$query_string .= " e.id = l.enquiry_id and l.subjects_id = '$subject' ";
}

$query_string .= " ORDER BY";
if (!empty($query)){
$query_string .= " relevance_1 desc,";
}
$query_string .= " id DESC";

echo $query_string;
echo "<br>".$legible_string;

$result=mysqli_query($con,$query_string);
$count= mysqli_num_rows($result);

echo "<br>".$count." results";
$output = "";
$output .= "    <!-- Page Content -->";
$output .= "<div id='container'>";
$output .="<table class=\"table table-hover table-bordered table-responsive\">";
$output .= "<thead>";
$output .= "<tr><th scope=\"col\">#</th>";
$output .= "<th scope=\"col\" class=\"text-nowrap\">Date submitted</th>";
$output .= "<th scope=\"col\">Question</th>";
$output .= "</tr></thead><tbody>";
while($array = mysqli_fetch_array($result)){
$output .= "<tr>";
$output .= "<th scope=\"row\"><a href=\"add_enquiry.php?id=".$array[0]."\">".$array[0]."</a></th>";
$output .= " <td class=\"text-nowrap\">".$array['completed_es']."</td>";
$output .= " <td>".$array['question']."</td>";
$output .= " </td></tr>";
					}
$output .= "</tbody></table>";
$output .= "</div></body></html>";
if (!empty($query)){
$ucquery = ucfirst($query);
$lcquery = lcfirst($query);
$output=str_replace($ucquery,"<strong>".$ucquery."</strong>",$output);
$output=str_replace($lcquery,"<strong>".$lcquery."</strong>",$output);
}
$pattern="/ (https?:\/\/[^ ]* {1})/i";
$replacement="<a href=$1>$1</a> ";
$output=preg_replace($pattern, $replacement, $output);
$pattern="/[ ]{2,}/";
$output=preg_replace($pattern, " ",$output);
$pattern= "/([a-z])\. ([A-Z])/i";
$replacement="$1.<p>$2";
$output=preg_replace($pattern, $replacement, $output);
$pattern= "/([a-z])\? ([A-Z])/i";
$replacement="$1?<p>$2";
$output=preg_replace($pattern, $replacement, $output);
$output = preg_replace('/[[:^print:]]/', ' ', $output);
echo $output;

$footer="";
$footer .= "<nav class=\"navbar navbar-inverse navbar-fixed-bottom\">";
$footer .= "<div class=\"container-fluid\">";
$footer .= "<ul class=\"nav navbar-nav\">";
$footer .= "<li><a target=\"new\" href=\"https://koha.kingsfund.org.uk\">Koha</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc=%7B7D15221E-DBEC-410A-8DB2-7D69BA43CC90%7D&file=Open%20Notebook.onetoc2&action=default\">IKS manua
l</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FProject%20funding%20request%20response%7C48c42742-05f9-4cf0-a264-6681b09ceba2%2F%29&wdorigin=703\">Fun
ding request answer template</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FInterlibrary%20loans.one%7C84b87dac-c5b7-4f37-ab22-c7e160ee25b0%2FInterlibrary%20loans%20procedure%7Cbe657322-256b-4cab-9651-058a384db36f%2F%29&wdorigin=703\">Pho
tocopy request</a></li>";
$footer .="</ul>";
$footer .= "</div>";
$footer .= "</nav>";
//echo $footer;

mysqli_close($con);
?>

