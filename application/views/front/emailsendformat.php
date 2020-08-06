<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
<title>Email</title>
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> -->
<style type="text/css">
.ReadMsgBody {width: 100%;}
.ExternalClass {width: 100%;}
.mobile {display: none;overflow: hidden;visibility:hidden;}
strong{font-weight: bold;}

  @media only screen and (max-width: 479px){ /**change to max-device-width after testing**/
    
       td[class="desktop"], table[class="desktop"] {
           display: none !important;
       }
      
     td[class="mobile_only"], table[class="mobile_only"], img[class="mobile_only"], div[class="mobile_only"], tr[class="mobile_only"] {
      display: block !important;
      width: auto !important;
        overflow: visible !important;
      height: auto !important;
      max-height: inherit !important;
      font-size: 15px !important;
      line-height: 21px !important;
      visibility: visible !important;
       }     
     
     img[class="mobile_header"] { 
      width: 320px !important;
      height: 243px !important;
      display: block !important;      
        overflow: visible !important;
      visibility: visible !important;}
     
     td[class="full_width"], table[class="full_width"] {
            width: 320px !important;
       }
      
     td[class="medium_width"], table[class="medium_width"] {
            width: 272px !important;
       }
       
     td[class="intro_text"], table[class="intro_text"] {
        font-size: 14px !important;
      line-height: 20px !important;
       }
    
  }
</style>

</head>

<body bgcolor="#f5f5f5" style="background-color:#f5f5f5; margin:0; padding:0;-webkit-font-smoothing: antialiased;width:100% !important;-webkit-text-size-adjust:none;" topmargin="0"><div style="font-size: 1px; color: #f5f5f5; display: none;"></div>

<table width="100%" bgcolor="#f5f5f5" style="background-color:#f5f5f5;" border="0" cellpadding="0" cellspacing="0">
  <tr>
   <td>Pemberitahuan Kontak Bantuan MenuQu atas nama :</td>
  </tr>
</table>
<table width="100%" bgcolor="#f5f5f5" style="background-color:#f5f5f5;margin-top:30px" border="0" cellpadding="0" cellspacing="1">
  <tr>
   <td>Nama : <?php echo $nama ?></td>
  </tr>
  <tr>
   <td>Email : <?php echo $email?></td>
  </tr>
   <tr>
   <td>Telp : <?php echo $telp; ?></td>
  </tr>
  <tr>
   <td>Pesan : <?php echo $pesan;?></td>
  </tr>
</table>

</body>