<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('layout/meta');?>
	<?php $this->load->view('layout/styles');?>
    <style>
        body{
	        background:#fff!important;
	    }
        
        
    </style>
</head>
<body>
   <?php $this->load->view('layout/admin_nav');?>
        <div class="">
           <div class="breadcrumb_div"> 
           <div class="container">
                <nav aria-label="breadcrumb" class="_breadcrumb">
                    <h2>Contact Leads</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="https://www.azistabhutanhealthcare.com/dashboard">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Leads</li>
                    </ol>
                </nav> 
             </div>
             </div>
        </div>
    <section class="pt-50">
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Enquiry Code</th>
                            <th>Created Date</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php //print_r($contact_leads); ?>
                           <?php  if(empty($contact_leads)) { } else { ?> 
                           <?php $idnumbers='0' ; foreach($contact_leads as $ct_leads) { $idnumbers++ ?>
                                <tr>
                                    <td><?php echo $idnumbers; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_code']; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_date']; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_name']; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_email']; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_contact']; ?></td>
                                    <td><?php echo $ct_leads['tritotab_leads_comment']; ?></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </section>
    
     <!--  Copyright -->
    <?php $this->load->view('layout/admin_copyright');  ?>
    <!-- End Copyright -->
	<!--  JavaScript -->
    <?php $this->load->view('layout/js');  ?>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.colVis.min.js"></script>
    <script>
       $(document).ready(function() {
            var table = $('#example').DataTable( {
                lengthChange: false,
                buttons: [
                    {
                        extend: 'excelHtml5',
                        title: '<?php echo Domain; ?>-Leads'
                    }
                ]
            });
            table.buttons().container()
                .appendTo( '#example_wrapper .col-md-6:eq(0)' );
        });
    </script>
    <!--  End JavaScript -->
</body>
</html>