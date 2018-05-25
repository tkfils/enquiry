<?php
$preamble = "";
$preamble .= "<!DOCTYPE html>\n";
$preamble .= "<html lang='en'>\n";
$preamble .= "  <head>\n";
$preamble .= "<script src=\"../jquery/jquery-3.3.1.min.js\"></script>\n";
$preamble .= "    <meta charset=\"utf-8\">\n";
$preamble .= "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n";
$preamble .= "    <meta name=\"description\" content=\"\">\n";
$preamble .= "    <meta name=\"author\" content=\"\">\n";
$preamble .= "    <title>Enquiry database</title>\n";
$preamble .= " <script src=\"../bootstrap/bootstrap.js\"></script>\n";
$preamble .= "    <!-- Bootstrap core CSS -->\n";
$preamble .= "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css\">\n";
$preamble .="<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js\"></script>\n";
$preamble .= "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\n";
$preamble .= "<link rel=\"stylesheet\" href=\"../summernote/summernote.css\">\n";
$preamble .= "<script src=\"../summernote/summernote.js\"></script>\n";
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
//$preamble .= "      <script src = \"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\"></script>";
$preamble .= "  </head>\n";
$preamble .= "  <body>\n";
$preamble .= "  <script>\n";
$preamble .= "    $(document).ready(function() {\n";
$preamble .= "        $('#summernote').summernote();\n";
$preamble .= "         $('#summernote2').summernote();\n";
$preamble .= "         $('#summernote3').summernote();\n";
$preamble .= "         $('#multiselect').multiselect();\n";
$preamble .= "    });\n";
$preamble .= "  </script>\n";
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
$qid = $_GET['id'];
$output = "";
$query_string="SELECT * from enquiry where id='$qid'";
$result=mysqli_query($con,$query_string);
while($array = mysqli_fetch_array($result)){
echo "<form action=\"add_enquiry_doit.php\" method=\"post\">";
echo "<h4>Enquirer</h4>";
$output .= "&nbsp;<label>Name :&nbsp; </label><input required type=\"text\" name=\"enquirer_name\" size=\"30\" value=\"".$array['enquirer_name']."\">";
$output .= "&nbsp;<label>Email :&nbsp; </label><input required type=\"email\" name=\"enquirer_email\" size=\"30\"value=\"".$array['enquirer_email']."\">";
$output .= "&nbsp;<label>Phone :&nbsp; </label><input type=\"text\" name=\"enquirer_phone\" size=\"12\" value=\"".$array['enquirer_phone']."\">";
$output .= "&nbsp;<label>Notes :&nbsp; </label><input type=\"text\" name=\"enquirer_notes\" size=\"30\" value=\"".$array['enquirer_notes']."\">";
$output .= "<nobr>&nbsp;<label>Job :&nbsp; </label><input type=\"text\" name=\"enquirer_job\" size=\"30\" value=\"".$array['enquirer_job']."\"></nobr>";
$output .= "<nobr>&nbsp;<label>Category :&nbsp; </label><select name=\"enquirer_category\"><option selected=\"selected\" value=\"".$array['enquirer_category']."\">".$array['enquirer_category']."</option></nobr>"; 
$query_string1 = "select distinct enquirer_category from enquiry where enquirer_category <> '' order by enquirer_category asc";
$result=mysqli_query($con,$query_string1);
while($array1 = mysqli_fetch_array($result)){
$output .= "<option value=\"".$array1['enquirer_category']."\">".$array1['enquirer_category']."</option>";
}
$output .= "</select>";

$output .="<hr>";
$output .="<h4>Enquiry</h4>";
$output .= "&nbsp;<label>Source :&nbsp; </label><select required=\"required\" name=\"enquiry_source\"><option selected=\"selected\" value=\"".$array['enquiry_source']."\">".$array['enquiry_source']."</option>";
$query_string2 = "select distinct enquiry_source from enquiry where enquiry_source <> '' and enquiry_source <> 'text' and enquiry_source <> 'gpccqa' order by enquiry_source asc";
$result=mysqli_query($con,$query_string2);
while($array2 = mysqli_fetch_array($result)){
$output .= "<option value=\"".$array2['enquiry_source']."\">".$array2['enquiry_source']."</option>";
}
$output .= "</select>";
$output .= "&nbsp;<label>Notes :&nbsp; </label><input type=\"text\" name=\"notes\" size=\"30\" value=\"".$array['notes']."\">";
$output .= "&nbsp;<label>Status :&nbsp; </label><select name=\"status\"><option selected=\"selected\" value=\"".$array['status']."\">".$array['status']."<option value=\"Completed\">Completed</option>";
$output .= "</select>";
$output .= "&nbsp;<label>User :&nbsp; </label><select required=\"required\" name=\"user\"><option selected=\"selected\" value=\"".$array['user']."\">".$array['user']."</option>";
$output .= "<option value=\"Deena Maggs\">Deena</option>";
$output .= "<option value=\"Hong-Anh Nguyen\">Hong-Anh</option>";
$output .= "<option value=\"Kathy Johnson\">Kathy</option>";
$output .= "<option value=\"Lynsey Hawker\">Lynsey</option>";
$output .= "<option value=\"Nick Willsher\">Nick</option>";
$output .= "<option value=\"Nikki Smiton\">Nikki</option>";
$output .= "</select>";
//$output .= "&nbsp;<label>Feedback :&nbsp; </label><input type=\"text\" name=\"enquirer_feedback\" size=\"30\" value=\"".$array['enquirer_feedback']."\">";
$output .= "&nbsp;<label>Referred :&nbsp; </label><input type=\"text\" name=\"referred\" size=\"30\" value=\"".$array['referred']."\">";
}


$query_string= "select subject from subjects s, subject_links l where s.id=l.subjects_id and l.enquiry_id='$qid'";
$result=mysqli_query($con,$query_string);
$subject_list="";
while( $row = mysqli_fetch_array( $result)){
    $subject_list .= $row['subject'];
}
$output .= "&nbsp;<label>&nbsp;Subject:&nbsp;</label><select id=\"multiselect\" name=\"subject[]\" multiple>";
//$output .= "<option selected=\"selected\" value=\"\">Any</option>";
$query_string = "select id, subject from subjects where current =1 order by subject asc";
$result=mysqli_query($con,$query_string);
while($array = mysqli_fetch_array($result)){
$output .= "<option value=".$array['id'];
if (strpos($subject_list, $array['subject']) !== false) {
$output .=" selected=\"true\"";
}
$output .= ">".$array['subject'];
$output .= "</option>";
}
$output .= "</select>";

$query_string3 = "select question, answer, enquirer_feedback from enquiry where id='$qid'";
$result=mysqli_query($con,$query_string3);
while($array3 = mysqli_fetch_array($result)){


$output .="<hr>";
$output .="<h4>Question</h4>\n";
$output .="<textarea id=\"summernote\" name=\"question\">";
$output .=$array3['question'];
$output .="</textarea>\n";

$output .="<hr>";
$output .="<h4>Answer</h4>\n";
$output .="<textarea id=\"summernote2\" name=\"answer\">";
$output .=$array3['answer'];
$output .="</textarea>\n";

$output .="<hr>";
$output .="<h4>Feedback</h4>\n";
$output .="<textarea id=\"summernote3\" name=\"enquirer_feedback\">";
$output .=$array3['enquirer_feedback'];
$output .="</textarea>\n";
}

$output .= "<input type =\"hidden\" name=\"qid\" value=".$qid.">";
$output .= "<input type =\"hidden\" name=\"completed_es\" value=".$array['completed_es'].">";
$output .= "<input type=\"submit\" value=\"Submit\" onclick=\"alert('Thanks for submitting a new enquiry')\"/>";
$output .= "</form>";
$output .="<br><br><br><br><br>";
echo $output;
$footer="";
$footer .= "<nav class=\"navbar navbar-inverse navbar-fixed-bottom\">";
$footer .= "<div class=\"container-fluid\">";
$footer .= "<ul class=\"nav navbar-nav\">";
$footer .= "<li><a target=\"new\" href=\"https://koha.kingsfund.org.uk\">Koha</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/:o:/r/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc=%7B7D15221E-DBEC-410A-8DB2-7D69BA43CC90%7D&file=Open%20Notebook.onetoc2&action=default\">IKS manual</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FEnquiries%2FResponse%20templates.one%7C0ec09d46-7cc5-4aaf-a986-581726dc5d5f%2FProject%20funding%20request%20response%7C48c42742-05f9-4cf0-a264-6681b09ceba2%2F%29&wdorigin=703\">Funding request answer template</a></li>";
$footer .= "<li><a target=\"new\" href=\"https://kingsfund.sharepoint.com/sites/BAU/SOM/SOPS/_layouts/15/WopiFrame.aspx?sourcedoc={eef53ac9-f730-4fa1-a8d4-8fb07370c1cb}&action=edit&wdLOR=&wd=target%28%2F%2FInterlibrary%20loans.one%7C84b87dac-c5b7-4f37-ab22-c7e160ee25b0%2FInterlibrary%20loans%20procedure%7Cbe657322-256b-4cab-9651-058a384db36f%2F%29&wdorigin=703\">Photocopy request</a></li>";
$footer .= "</ul>";
$footer .= "</div>";
$footer .= "</nav>";
//echo $footer;

mysqli_close($con);
?>

