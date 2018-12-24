@extends('makeuplayout.master')
@section('content')
    <div class="w3-hide-small w3-hide-medium">
    <div class="row ">
      <h1 class="about_h1 heading"> <a href="/bridal">Bridal</a> & <a href="/fashion">Fashion</a> </h1>
    </div>
    <section id="fashion" class="section_gap">
      <br>
      <div class="row">
        <h1 class="about_h1 heading_1">Fashion</h1>
      </div>
      <div class="gallery">
        <div class="row">
          <div class="col-6">
            @if(!empty(($Fashion[0])))
            <img class="port-l"src="{{ url($Fashion[0]->name) }}" alt="">
            @endif
          </div>
          <div class="col-6">
            @if(!empty(($Fashion[1])))
            <img class="port-r"src="{{ url($Fashion[1]->name) }}" alt="">
            @endif
          </div>
        </div>
        <div class="row">
          @if(!empty(($Fashion[2])))
          <img class="port-m" src="{{ url($Fashion[2]->name) }}" alt="">
          @endif
        </div>
        <div class="row">
          <div class="col-6">
            @if(!empty(($Fashion[3])))
            <img class="port-l"src="{{ url($Fashion[3]->name) }}" alt="">
            @endif
          </div>
          <div class="col-6">
            @if(!empty(($Fashion[4])))
            <img class="port-r"src="{{ url($Fashion[4]->name) }}" alt="">
            @endif
          </div>
        </div>
        <div class="row">
          @if(!empty(($Fashion[5])))
          <img class="port-m" src="{{ url($Fashion[5]->name) }}" alt="">
          @endif
        </div><br>
        <div class="paginate">
          {{ $Fashion->links() }}
        </div>
      </div>
    </section>
   </div>
   {{-- Bootsrtap Page --}}
<div class="w3-hide-large">
<div class="row ">
<h1 class="about_h1 heading-sm"> <a href="/bridal">Bridal</a> & <a href="/fashion">Fashion</a> </h1>
</div>
<section id="bridal-sm">
<div class="row" >
</div>
<div class="row">
<h1 class="about_h1 heading_2">Fashion</h1>
</div>
<div class="gallery">
<div class="row">
<div class="col-6">
@if(!empty(($Fashion[0])))
<img class="port-s"src="{{ url($Fashion[0]->name) }}" width="460" height="345" alt="">
@endif
</div>
<div class="col-6">
@if(!empty(($Fashion[1])))
<img class="port-s"src="{{ url($Fashion[1]->name) }}" width="460" height="345" alt="">
@endif
</div> 
</div>
<div class="row">
@if(!empty(($Fashion[2])))
<img class="port-sm" src="{{ url($Fashion[2]->name) }}" width="460" height="345" alt="">
@endif
</div>
<div class="row">
<div class="col-6">
@if(!empty(($Fashion[3])))
<img class="port-s"src="{{ url($Fashion[3]->name) }}" width="460" height="345" alt="">
@endif
</div>
<div class="col-6">
@if(!empty(($Fashion[4])))
<img class="port-s"src="{{ url($Fashion[4]->name) }}" width="460" height="345" alt="">
@endif
</div> 
</div>
<div class="row">
@if(!empty(($Fashion[5])))
<img class="port-sm" src="{{ url($Fashion[5]->name) }}" width="460" height="345" alt="">
@endif
</div><br>
<div class="paginate">
{{ $Fashion->links() }}
 </div>
</section>
</div>
{{-- End of Bootstrap Page --}}
  @endsection