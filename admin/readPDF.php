 <?php
              $file = 'form1stufaps2014.pdf';
              $filename = 'form1stufaps2014.pdf';
              header('Content-type: application/pdf');
            header('Content-Disposition: inline; filename="' . $filename . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
              @readfile($file);
?>