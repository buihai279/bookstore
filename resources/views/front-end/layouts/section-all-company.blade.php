<section>
    <div class="row" >
        <div class="col s12 " style="padding: 0">
            <div class="home-header">
                <h2>
                    <a href="#">Tất cả công ty</a>
                </h2>
            </div>
        </div>
    </div>
    <div class="row" style="box-sizing:content-box;border: 1px solid #dfdfdf;">
        @foreach ($companies as $key => $company)
            <div class="col s12 m4 l3">
                <div class="card product-item hoverable">
                    <div class="card-image">
                        @if ($company->company_image!='')
                            <img src="{{ asset($company->company_image) }}">
                        @else
                            <img src="{{ url('storage/app/noimagefound.jpg') }}">
                        @endif
                    </div>
                    <div class="card-content ">
                        <a  href="{{ route('viewCompany',$company->companyId) }}" title="{{$company->company_name}}" >
                            <span class="card-title">
                                {{$company->company_name}}
                            </span>
                        </a>
                    </div>
                    <div class="card-action">
                        <div class="price-sale">
                            <span class="review">phát hành {{$company->totalBook}} đầu sách</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>