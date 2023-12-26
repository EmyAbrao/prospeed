@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Carro')

<!-- Page -->
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-faq.css')}}" />
@endsection

@section('content')
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">ProSpeed /</span> Carros - {{$carro->model}}
</h4>
<div class="d-flex flex-column justify-content-center align-items-center rounded">
  <img src="{{$carro->picture}}" alt="" width="90%">
</div>

<div class="row mt-4">
  <!-- Navigation -->
  <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
    <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
      <ul class="nav nav-align-left nav-pills flex-column">
        <li class="nav-item">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#detalhes">
            <i class="ti ti-credit-card me-1 ti-sm"></i>
            <span class="align-middle fw-medium">Detalhes de {{$carro->model}} </span>
          </button>
        </li>

        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
            <i class="ti ti-briefcase me-1 ti-sm"></i>
            <span class="align-middle fw-medium">Delivery</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
            <i class="ti ti-rotate-clockwise-2 me-1 ti-sm"></i>
            <span class="align-middle fw-medium">Cancellation & Return</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders">
            <i class="ti ti-box me-1 ti-sm"></i>
            <span class="align-middle fw-medium">My Orders</span>
          </button>
        </li>
        <li class="nav-item">
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#product">
            <i class="ti ti-settings me-1 ti-sm"></i>
            <span class="align-middle fw-medium">Product & Services</span>
          </button>
        </li>
      </ul>
      <div class="d-none d-md-block">
        <div class="mt-4">
          <img src="{{asset('assets/img/illustrations/girl-sitting-with-laptop.png')}}" class="img-fluid" width="270" alt="FAQ Image">
        </div>
      </div>
    </div>
  </div>
  <!-- /Navigation -->

  <!-- FAQ's -->
  <div class="col-lg-9 col-md-8 col-12">
    <div class="tab-content py-0">
      <div class="tab-pane fade show active" id="detalhes" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-credit-card ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0">
              <span class="align-middle">Informações sobre o carro</span>
            </h4>
            <small>Informações reais</small>
          </div>
        </div>
        <h4 class="py-3 mb-4"><span class="text-muted fw-light"> Modelo do carro: {{$carro->model}} </span>
        </h4>
        <div class="row">
          <!-- Statistics -->
          <div class="col-lg-12 mb-4 col-md-12">
            <div class="card h-100">
              <div class="card-header d-flex justify-content-between">
                <h5 class="card-title mb-0">Detalhes</h5>
                <small class="text-muted">Estatísticas</small>
              </div>
              <div class="card-body pt-2">
                <div class="row gy-3">
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['cilindrada']}}</h5>
                        <small>Cilindradas</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['potencia']}}</h5>
                        <small>Potência</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-shopping-cart ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['torque']}}</h5>
                        <small>Torque</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['transmissao']}}</h5>
                        <small>Transmissão</small>
                      </div>
                    </div>
                  </div>
                  {{-- final da linha 1 --}}
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-primary me-3 p-2"><i class="ti ti-chart-pie-2 ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['eletronica']}}</h5>
                        <small>Eletrônica</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Botão Bost</h5>
                        <small>@if($carro->info['botao_bost'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-danger me-3 p-2"><i class="ti ti-shopping-cart ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">DRS</h5>
                        <small>@if($carro->info['drs'])Sim @else Não @endif
                        </small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['peso']}}</h5>
                        <small>Peso</small>
                      </div>
                    </div>
                  </div>
                  {{-- final da linha 2 --}}
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Ajuste da barra onboard</h5>
                        <small>@if($carro->info['ajuste_barra_onboard'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Ajuste do freio onboard</h5>
                        <small>@if($carro->info['ajuste_freio_onboard'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Limitador de velocidade</h5>
                        <small>@if($carro->info['limitador_velocidade'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['distribuicao_peso']}}</h5>
                        <small>Distribuição do peso</small>
                      </div>
                    </div>
                  </div>
                  {{-- final da linha 3 --}}
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Turbo ajustável</h5>
                        <small>@if($carro->info['turbo_ajustavel'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-info me-3 p-2"><i class="ti ti-users ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">Faróis</h5>
                        <small>@if($carro->info['farois'])Sim @else Não @endif</small>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-6">
                    <div class="d-flex align-items-center">
                      <div class="badge rounded-pill bg-label-success me-3 p-2"><i class="ti ti-currency-dollar ti-sm"></i></div>
                      <div class="card-info">
                        <h5 class="mb-0">{{$carro->info['distancia_eixo']}}</h5>
                        <small>Distância do Eixo</small>
                      </div>
                    </div>
                  </div>
                  {{-- fim da linha 4 --}}
                </div>
              </div>
            </div>
          </div>  
      </div>
      <div class="tab-pane fade" id="delivery" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-briefcase ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0">
              <span class="align-middle">Delivery</span>
            </h4>
            <small>Lorem ipsum, dolor sit amet.</small>
          </div>
        </div>
        <div id="accordionDelivery" class="accordion">
          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionDelivery-1" aria-controls="accordionDelivery-1">
                How would you ship my order?
              </button>
            </h2>

            <div id="accordionDelivery-1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                For large products, we deliver your product via a third party
                logistics company offering you the “room of choice” scheduled
                delivery service. For small products, we offer free parcel
                delivery.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-2" aria-controls="accordionDelivery-2">
                What is the delivery cost of my order?
              </button>
            </h2>
            <div id="accordionDelivery-2" class="accordion-collapse collapse">
              <div class="accordion-body">The cost of scheduled delivery is $69 or $99 per order, depending on the destination postal code. The parcel delivery is free.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionDelivery-4" aria-controls="accordionDelivery-4">
                What to do if my product arrives damaged?
              </button>
            </h2>
            <div id="accordionDelivery-4" class="accordion-collapse collapse">
              <div class="accordion-body">
                We will promptly replace any product that is damaged in transit.
                Just contact our
                <a href="javascript:void(0);">support team</a>, to notify us of the situation
                within 48 hours of product arrival.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="cancellation" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-rotate-clockwise-2 ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0"><span class="align-middle">Cancellation & Return</span></h4>
            <small>Lorem ipsum, dolor sit amet.</small>
          </div>
        </div>
        <div id="accordionCancellation" class="accordion">
          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionCancellation-1" aria-controls="accordionCancellation-1">
                Can I cancel my order?
              </button>
            </h2>

            <div id="accordionCancellation-1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                <p>
                  Scheduled delivery orders can be cancelled 72 hours prior to
                  your selected delivery date for full refund.
                </p>
                <p class="mb-0">
                  Parcel delivery orders cannot be cancelled, however a free
                  return label can be provided upon request.
                </p>
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCancellation-2" aria-controls="accordionCancellation-2">
                Can I return my product?
              </button>
            </h2>
            <div id="accordionCancellation-2" class="accordion-collapse collapse">
              <div class="accordion-body">
                You can return your product within 15 days of delivery, by
                contacting our
                <a href="javascript:void(0);">support team</a>, All merchandise returned must be
                in the original packaging with all original items.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" aria-controls="accordionCancellation-3" data-bs-target="#accordionCancellation-3">
                Where can I view status of return?
              </button>
            </h2>
            <div id="accordionCancellation-3" class="accordion-collapse collapse">
              <div class="accordion-body">
                <p>Locate the item from Your <a href="javascript:void(0);">Orders</a></p>
                <p class="mb-0">Select <span class="fw-medium">Return/Refund</span> status</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="orders" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-box ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0">
              <span class="align-middle">My Orders</span>
            </h4>
            <small>Lorem ipsum, dolor sit amet.</small>
          </div>
        </div>
        <div id="accordionOrders" class="accordion">
          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionOrders-1" aria-controls="accordionOrders-1">
                Has my order been successful?
              </button>
            </h2>

            <div id="accordionOrders-1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                <p>
                  All successful order transactions will receive an order
                  confirmation email once the order has been processed. If you
                  have not received your order confirmation email within 24
                  hours, check your junk email or spam folder.
                </p>
                <p class="mb-0">
                  Alternatively, log in to your account to check your order
                  summary. If you do not have a account, you can contact our
                  Customer Care Team on <span class="fw-medium">1-000-000-000</span>.
                </p>
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOrders-2" aria-controls="accordionOrders-2">
                My Promotion Code is not working, what can I do?
              </button>
            </h2>
            <div id="accordionOrders-2" class="accordion-collapse collapse">
              <div class="accordion-body">
                If you are having issues with a promotion code, please contact
                us at <span class="fw-medium">1 000 000 000</span> for assistance.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionOrders-3" aria-controls="accordionOrders-3">
                How do I track my Orders?
              </button>
            </h2>
            <div id="accordionOrders-3" class="accordion-collapse collapse">
              <div class="accordion-body">
                <p>
                  If you have an account just sign into your account from
                  <a href="javascript:void(0);">here</a> and select <span class="fw-medium">“My Orders”</span>.
                </p>
                <p class="mb-0">
                  If you have a a guest account track your order from
                  <a href="javascript:void(0);">here</a> using the order number and the email
                  address.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="product" role="tabpanel">
        <div class="d-flex mb-3 gap-3">
          <div>
            <span class="badge bg-label-primary rounded-2 p-2">
              <i class="ti ti-camera ti-lg"></i>
            </span>
          </div>
          <div>
            <h4 class="mb-0">
              <span class="align-middle">Product & Services</span>
            </h4>
            <small>Lorem ipsum, dolor sit amet.</small>
          </div>
        </div>
        <div id="accordionProduct" class="accordion">
          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#accordionProduct-1" aria-controls="accordionProduct-1">
                Will I be notified once my order has shipped?
              </button>
            </h2>

            <div id="accordionProduct-1" class="accordion-collapse collapse show">
              <div class="accordion-body">
                Yes, We will send you an email once your order has been shipped.
                This email will contain tracking and order information.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProduct-2" aria-controls="accordionProduct-2">
                Where can I find warranty information?
              </button>
            </h2>
            <div id="accordionProduct-2" class="accordion-collapse collapse">
              <div class="accordion-body">
                We are committed to quality products. For information on
                warranty period and warranty services, visit our Warranty
                section <a href="javascript:void(0);">here</a>.
              </div>
            </div>
          </div>

          <div class="card accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionProduct-3" aria-controls="accordionProduct-3">
                How can I purchase additional warranty coverage?
              </button>
            </h2>
            <div id="accordionProduct-3" class="accordion-collapse collapse">
              <div class="accordion-body">
                For the peace of your mind, we offer extended warranty plans
                that add additional year(s) of protection to the standard
                manufacturer’s warranty provided by us. To purchase or find out
                more about the extended warranty program, visit Extended
                Warranty section <a href="javascript:void(0);">here</a>.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /FAQ's -->
</div>

<!-- Contact -->
<div class="row mt-5">
  <div class="col-12 text-center mb-4">
    <div class="badge bg-label-primary">Question?</div>
    <h4 class="my-2">You still have a question?</h4>
    <p>If you can't find question in our FAQ, you can contact us. We'll answer you shortly!</p>
  </div>
</div>
<div class="row text-center justify-content-center gap-sm-0 gap-3">
  <div class="col-sm-6">
    <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary my-3 rounded-2 p-2">
        <i class="ti ti-phone ti-md"></i>
      </span>
      <h4 class="mb-2"><a class="text-body" href="tel:+(810)25482568">+ (810) 2548 2568</a></h4>
      <p>We are always happy to help</p>
    </div>
  </div>
  <div class="col-sm-6">
    <div class=" py-3 rounded bg-faq-section text-center">
      <span class="badge bg-label-primary my-3 rounded-2 p-2">
        <i class="ti ti-mail ti-md"></i>
      </span>
      <h4 class="mb-2"><a class="text-body" href="mailto:help@help.com">help@help.com</a></h4>
      <p>Best way to get a quick answer</p>
    </div>
  </div>
</div>
<!-- /Contact -->
@endsection