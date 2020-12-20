<div>
    @if (session()->has('message'))
     <b> {{ session()->get('message')  }} </b>
    @endif
</div>
