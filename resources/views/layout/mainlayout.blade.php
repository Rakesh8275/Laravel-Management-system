<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ url('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ url('assets/css/black-dashboard.css') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ url('assets/demo/demo.css') }}" rel="stylesheet" />

  <link rel="stylesheet" href="{{ url('assets/css/table.css') }}" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.0/css/fixedHeader.bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap.min.css" />
</head>

<body class="">
  @include('sweetalert::alert')
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <a href="javascript:void(0)" class="simple-text logo-mini">
            TA
          </a>
          <a href="javascript:void(0)" class="simple-text logo-normal">
            TA Team
          </a>
        </div>
        <!-- <ul class="nav">
          <li class="active ">
            <a href="{{ url('dashboard') }}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ url('product') }}">
              <i class="tim-icons icon-atom"></i>
              <p>Product</p>
            </a>
          </li>
          <li>
            <a href="{{ url('customer') }}">
              <i class="tim-icons icon-pin"></i>
              <p>Customer</p>
            </a>
          </li>
          <li>
            <a href="{{ url('sale') }}">
              <i class="tim-icons icon-bell-55"></i>
              <p>Sale Report</p>
            </a>
          </li>
          <li>
            <a href="./user.html">
              <i class="tim-icons icon-single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li>
            <a href="./tables.html">
              <i class="tim-icons icon-puzzle-10"></i>
              <p>Table List</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
              <i class="tim-icons icon-align-center"></i>
              <p>Typography</p>
            </a>
          </li>
          <li>
            <a href="./rtl.html">
              <i class="tim-icons icon-world"></i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="active-pro">
            <a href="./upgrade.html">
              <i class="tim-icons icon-spaceship"></i>
              <p>Upgrade to PRO</p>
            </a>
          </li> 
        </ul> -->
        <ul class="nav">
          <li class="active ">
            <a href="{{ url('dashboard') }}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ url('product') }}">
              <i class="tim-icons icon-atom"></i>
              <p>product</p>
            </a>
          </li>
          <li>
            <a href="{{ url('customer') }}">
              <i class="fas fa-user"></i>
              <p>Customer</p>
            </a>
          </li>
          <li>
            <a href="{{ url('sale') }}">
              <i class="fas fa-cart-arrow-down"></i>
              <p>Sale</p>
            </a>
          </li>




        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">

              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="tim-icons icon-sound-wave"></i>
                  <p class="d-lg-none">
                    Notifications
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  <li class="nav-link"><a href="#" class="nav-item dropdown-item">Mike John responded to your email</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">You have 5 more tasks</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Your friend Michael is in town</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another notification</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Another one</a></li>
                </ul>
              </li>
              <li class="dropdown nav-item">
                @guest
                <a href="{{ route('signout') }}" class="dropdown-toggle nav-link fall" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ url('assets/img/anime3.png') }}" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                @else
                <a href="{{ route('signout') }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ url('assets/img/anime3.png') }}" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                  <p class="d-lg-none">
                    Log out
                  </p>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <!-- <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Profile</a></li>
                  <li class="nav-link"><a href="javascript:void(0)" class="nav-item dropdown-item">Settings</a></li> -->
                  <li class="dropdown-divider"></li>
                  <li class="nav-link"><a href="{{ route('signout') }}" class="nav-item dropdown-item">Log out</a></li>
                </ul>
                @endguest
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      <div class="content">

        @yield('layout.content')

      </div>
      <input type="hidden" id="currentFilter" name="currentFilter" value="">
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script>project <i class="tim-icons icon-heart-2"></i> by
            <a href="javascript:void(0)" target="_blank"></a> TA
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- process animations -->
  <button style="display:none" class="algmstarts" onclick="demo.startAlgm('top','left')"></button>
  <button style="display:none" class="algmends" onclick="demo.algmends('top','left')"></button>

  <!--   Core JS Files   -->
  <script src="{{ url('assets/js/core/jquery.min.js') }}"></script>
  <script src="{{ url('assets/js/core/popper.min.js') }}"></script>
  <script src="{{ url('assets/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ url('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <!-- Place this tag in your head or just before your close body tag. -->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
  <!-- Chart JS -->
  <script src="{{ url('assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ url('assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ url('assets/js/black-dashboard.min.js') }}"></script><!-- Black Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{ url('assets/demo/demo.js') }}"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="{{ url('assets/js/createsale.js') }}"></script>
  <script src="{{ url('assets/js/pageValidations.js') }}"></script>
  <script src="{{ url('assets/js/formValidations.js') }}"></script>

  <!-- datepicker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
  <script>
    $(document).ready(function() {
      $("#datepicker").datepicker();
      $("#fromtodp").datepicker();
      $("#toFrom").datepicker();
      $("#customfilterfrom").datepicker();
      $("#customfilterto").datepicker();

    });
  </script>
  <!-- datepicker end -->

  <!-- select2 -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.choose-vehicles').select2();
    });
    $(document).ready(function() {
      $('.multiple-vehicles').select2();
    });
  </script>

  <!-- end -->

  <!-- sweetalert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
  <script type="text/javascript">
    $('.show_confirm').click(function(event) {
      var form = $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete this record?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
  </script>
  <!-- end -->


  <script>
    $(document).ready(function() {
      var table = $('#example').DataTable({
        responsive: true
      });

      // new $.fn.dataTable.FixedHeader( table );
    });
  </script>



  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


  <script>
    $('#createSaleChooseCustomer').on('change', function() {
      var values = this.value;
      $.ajax({
        url: "{{url('/getCustomerDeatils')}}",
        type: "POST",
        data: {
          id: values,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(res) {
          var result = res.customer;
          console.log(result);
          $('#bill_name').val(result.customer_name);
          $('#state').val(result.statename);
          $('#gstin').val(result.gstin);
          $('#phone').val(result.phone_1_main);
        }
      });
    });
  </script>



  <script>
    $('.selectProductSale').on('change', function() {
      var values = this.value;
      $.ajax({
        url: "{{url('/getProductDeatils')}}",
        type: "POST",
        data: {
          id: values,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(res) {
          var result = res.product;
          var a = parseFloat(result.cgst),
            b = parseFloat(result.sgst);
          $('#product_code').val(result.product_code);
          $('#tax').val(a + b);
          $('#unit').val(result.product_unit);
          $('#rate').val(result.sales_rate);
        }
      });
    });
  </script>

  <script>
    $(document).ready(function() {
      // $(".selectProductCideSale").blur(function(){
      $('.selectProductCideSale').bind('keyup', function() {
        var values = this.value;
        $.ajax({
          url: "{{url('/getProductCodeDeatils')}}",
          type: "POST",
          data: {
            id: values,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(res) {
            var result = res.product;
            var a = parseFloat(result.cgst),
              b = parseFloat(result.sgst);
            $('#product_code').val(result.product_code);
            $('#tax').val(a + b);
            $('#unit').val(result.product_unit);
            $('#rate').val(result.sales_rate);
            $('.selectProductSale').find(":selected").text(result.product_name);
          }
        });
      });
    });
  </script>

  <script>
    $("#reportDownloadCSV").click(function() {
      var values = $('#currentFilter').val();
      window.location.replace("/downloadCSVFilterBased?filter=" + values);
    });
    $("#reportDownloadEXCELL").click(function() {
      var values = $('#currentFilter').val();
      window.location.replace("/downloadEXCELLFilterBased?filter=" + values);

    });

    $("#reportDownloadPDF").click(function() {
      var values = $('#currentFilter').val();
      window.location.replace("/downloadPDFFilterBased?filter=" + values);
    });

    $("#reportDownloadEXCELL").click(function() {
      var fromdate = $('#customfilterto').val();
      var todate = $('#customfilterfrom').val();
      window.location.replace("/downloadEXCELLFilterBased?fromdate=" + fromdate + "&todate=" + todate)
    });
    $("#reportDownloadCSV").click(function() {
      var fromdate = $('#customfilterto').val();
      var todate = $('#customfilterfrom').val();
      window.location.replace("/downloadCSVFilterBased?fromdate=" + fromdate + "&todate=" + todate)
    });
    jQuery("#onlineexport").click(function() {
      var values = $('currentFilter').val();
      window.location.replace("/downloadOnlinePDF")
    });
  </script>
  <script>
    // $(document).ready(function() {
    //   $("#onlineexport").click(function() {
    //     alert("Hello!");

    //   });
    // });
    $("#onlineexport").on("click", function() {
      console.log($(this).text());
    });
  </script>

  <script>
    $("#updateScript").click(function() {
      var algorithmFD = $('#fromd').val();
      var algorithmTD = $('#tod').val();
      var algorithmUP = $('#updatePrice').val();
      var algorithmUQ = $('#updateQuantity').val();
      if (algorithmUP) {
        $('.algmstarts').trigger('click');
      }
      setTimeout(function() {
        $.ajax({
          url: "{{url('/runalgorithm')}}",
          type: "POST",
          data: {
            algorithmFD: algorithmFD,
            algorithmTD: algorithmTD,
            algorithmUP: algorithmUP,
            algorithmUQ: algorithmUQ,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(res) {
            setTimeout(function() {
              console.log('hello');
              $('.algmends').trigger('click');
            }, 3500);
          }
        });
      }, 2500);
    });
  </script>
  <script>
    $('#sale_type').on('change', function() {
      var values = this.value;
      if (values == 1 || 3) {
        $("customselect").wrap('<span/>')
      }

    })
  </script>
  <script>
    $('#customerselect').on('change', function() {
      var values = this.value;
      if (values == 1) {
        $('#custom1').show();
        $('#custom2').hide();

      }
      if (values == 2) {
        $('#custom2').show();
        $('#custom1').hide();

      }

    })
  </script>
  <script>
    $('#sale_type').on('change', function() {
      var values = this.value;
      if (values == 2 || 1) {
        $('.cgstt').show();
        $('.cgstt_dis').show();
        $('.sgstt').show();
        $('.sgstt_dis').show();
        $('.igstt').hide();
        $('.igstt_dis').hide();

      }
      if (values == 3) {
        $('.igstt').show();
        $('.igstt_dis').show();
        $('.sgstt').hide();
        $('.sgstt_dis').hide();
        $('.cgstt').hide();
        $('.cgstt_dis').hide();

      }

    })
  </script>

  <!-- onblur nos -->
  <script>
    $("#nos").blur(function() {
      var values = this.value;
      // get tax % value
      // get the rate
      // tax calculation
      // unit  percent (price * quantity )
      //tax % * rate
      var productRate = $('#rate').val(); //current product rate
      var productTax = $('#tax').val(); //current tax
      var totalAmt = productRate * values;
      var taxPercentage = (productTax / 100) * totalAmt;
      $('#tottax').val(taxPercentage);
      $('#total').val(parseFloat((totalAmt + taxPercentage)).toFixed(2));
      $('.grandtotal').val(totalAmt);
      qty_total = $('#nos').val();
      $('.qty_total_dis').text(qty_total);
      sub_total = values * productRate;
      $('.sub_total_dis').text(sub_total);
      cgstt = (parseFloat(((productTax / 2 ) / 100) * productRate * values).toFixed(2));
      $('.cgstt_dis').text(cgstt);
      igstt =  (parseFloat((productTax / 100) * productRate * values).toFixed(2));
      $('.igstt_dis').text(igstt);
      sgstt =  (parseFloat(((productTax / 2) / 100) * productRate * values).toFixed(2));
      $('.sgstt_dis').text(sgstt);
      grand_total = $('#total').val();
      $('.grand_total_dis').text(grand_total);
      cesss = 0;
      $('.cesss_dis').text(cesss);




    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#sale_type').on('change', function() {
        var values = this.value;
        $.ajax({
          url: "{{url('fetch_sales')}}",
          type: "POST",
          data: {
            optvalue: values,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(response) {
            var result1 = response.sales;
            console.log(result1);
            $('#bill').val(result1.invoiceno + 1);

          }
        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      $('#state-dd').on('change', function() {
        var idState = this.value;
        $("#city-dd").html('');
        $.ajax({
          url: "{{url('api/fetch-cities')}}",
          type: "POST",
          data: {
            state_id: idState,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(res) {
            $('#city-dd').html('<option value="">Select City</option>');
            $.each(res.cities, function(key, value) {
              $("#city-dd").append('<option value="' + value
                .id + '">' + value.name + '</option>');
            });
          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#customer_name').on('change', function() {
        var idcustomer = this.value;
        var gstin = $("#gstin").val();
        var phone = $("#phone").val();
        $.ajax({
          url: "{{url('api/fetch-customer')}}",
          type: "POST",
          data: {
            customer_id: idcustomer,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(response) {
            var result1 = response.cus;
            console.log(result1.id);
            $('#gstin').val(result1.gstin);
            $('#contact').val(result1.phone1);
            $('#billing_name').val(result1.customer_name)




          }
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#productname').on('change', function() {
        var idproduct = this.value;
        var tax = $("#tax").val();
        var product_code = $("#product_code").val();
        var unit = $("#unit").val();
        var price = $("#rate").val();
        $.ajax({
          url: "{{url('api/fetch-product')}}",
          type: "POST",
          data: {
            product_id: idproduct,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(response) {

            var result = response.pr;
            console.log(result.id);
            
            var tax = parseFloat(result.sgst + result.cgst).toFixed(2);
            var tottax = parseFloat((tax / 100) * result.price).toFixed(2);
            var total =  parseFloat(tax + tottax).toFixed(2);
            var sl = 1;
            $('#slno').val(sl);
            $('#product_code').val(result.product_code);
            $('#unit').val(result.unit);
            $('#tax').val(tax);
            $('#rate').val(result.sale_price);
          }
        });
      });
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#save').on('change', function() {
        var idsaleprint = this.value;
        $.ajax({
          url: "{{url('api/fetch-customer')}}",
          type: "POST",
          data: {
            saleok_id: idsaleprint,
            _token: '{{csrf_token()}}'
          },
          dataType: 'json',
          success: function(response) {
            var value1 = response.saleprint;
            console.log(value1.id);
            $('#gstin').val(value1.gstin);
            $('#contact').val(value1.phone1);
            $('#billing_name').val(value1.customer_name)




          }
        });
      });
    });
  </script>

  <script>
    $(function() {
      $("#date").datepicker({
        dateFormat: 'y/m/d',
        changeMonth: true,
        changeYear: true
      });
    });
  </script>
  <script>
    $(".pdopen").click(function() {
      $('.reportassets').show();
    });
    $("#reportCustom").click(function() {
      $('#customdisplay').show();
    });
    $("#reportToday").click(function() {
      var idtoday = $(this).attr('id');
      console.log(idtoday);
      $.ajax({
        url: "{{url('getTodaysData')}}",
        type: "POST",
        data: {
          today_id: idtoday,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          $('#main').find('tr').remove();
          var today = response;

          $.each(today, function(key, value) {
            $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td> " + value.transaction_id + " </td></tr>");

          });
        }
      });
    });
    $("#reportYesterday").click(function() {
      var idyesterday = $(this).attr('id');
      console.log(idyesterday);
      $.ajax({
        url: "{{url('getYesterdaysData')}}",
        type: "POST",
        data: {
          yesterday_id: idyesterday,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          $('#main').find('tr').remove();
          var yesterday = response;

          $.each(yesterday, function(key, value) {
            $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td> " + value.transaction_id + " </td></tr>");

          });
        }
      });
    });
    $("#reportLast7Days").click(function() {
      var idlast7 = $(this).attr('id');
      console.log(idlast7);
      $.ajax({
        url: "{{url('getLast7Data')}}",
        type: "POST",
        data: {
          last7_id: idlast7,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          $('#main').find('tr').remove();
          var last7 = response;

          $.each(last7, function(key, value) {
            $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td> " + value.transaction_id + " </td></tr>");

          });
        }
      });
    });
    $("#reportLast30Days").click(function() {
      var idlast30 = $(this).attr('id');
      console.log(idlast30);
      $.ajax({
        url: "{{url('getLast30Data')}}",
        type: "POST",
        data: {
          last30_id: idlast30,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          $('#main').find('tr').remove();
          var last30 = response;

          $.each(last30, function(key, value) {
            $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td> " + value.transaction_id + " </td></tr>");

          });
        }
      });
    });
    $("#savesearch").on('click', function() {
      var fromdate = $('#customfilterfrom').val();
      var todate = $('#customfilterto').val();
      $.ajax({
        url: "{{url('getCustomData')}}",
        type: "POST",
        data: {
          from_id: fromdate,
          to_id: todate,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(response) {
          $('#main').find('tr').remove();
          var custom = response;

          $.each(custom, function(key, value) {
            $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td> " + value.transaction_id + " </td><td></tr>");

          });
        }
      });
    });
  </script>

  <script>
    function edittodayRow(id) {
      // current row id
      var todayid = this.value;
      $.ajax({
        url: "{{url('saleedit')}}",
        type: 'POST',
        data: {
          id: todayid
        },
        success: function(response) {

        }
      });
    }
  </script>
</body>

<script>
  $("#reportToday").on('click', function() {

    $.ajax({
      url: "{{url('sale/')}}",
      type: "POST",
      data: {
        from_id: fromdate,
        to_id: todate,
        _token: '{{csrf_token()}}'
      },
      dataType: 'json',
      success: function(response) {
        $('#main').find('tr').remove();
        var custom = response;

        $.each(custom, function(key, value) {
          $("#main").append("<tr><td> " + value.id + " </td> <td> " + value.type + " </td> <td> " + value.date + " </td><td> " + value.gstin + " </td><td> " + value.customer_name + " </td><td> " + value.nos + " </td><td> " + value.total + " </td><td><a href=''><button type='button' class='btn-icon btn-primary'><span class='v-btn__content'><i class='tim-icons icon-pencil'></i> </span></button></a></td></tr>");

        });
      }
    });
  });
</script>
<script>
  $('#savesale').on('click', function() {
    $('#paymentmodal').modal('show');
  });
</script>
<script>
  $(document).ready(function() {
    $('#savesale').on('click', function() {
      var value = $('#total').val();
      console.log(value);
      $('#totalamotraz').val(value);

    });
  });
</script>

</html>