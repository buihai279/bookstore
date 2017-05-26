<style type="text/css">
    .center-align li{
        border: 1px dashed #00B7F1;
        border-right: none;
    }
    .center-align li:last-child{
        border: 1px dashed #00B7F1;
    }
</style>
@if (isset($pagination)&&$pagination!='')
    @php
        echo $pagination;
    @endphp
@endif

