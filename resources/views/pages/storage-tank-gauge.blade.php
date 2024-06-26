@extends('base')

@section('custom-css')
<link rel="stylesheet" href="{{asset("css/storage.css")}}">
@endsection

@section('content')
<div class="row">
    {{-- Storage 1 --}}
    <div class="col-lg-4 col-md-6 m-0 mb-4">
       <div class="container text-box text-center">
          <div class="row">
             <div class="container cpo bg-info">Tinggi CP0 (mm)</div>
          </div>
          <div class="row">
             <div class="container cpo height" id="heightOfCPO1">{{$data->heightOfCPO}}</div>
          </div>
       </div>
       <div class="linetop"></div>
       <div class="tank">
          <div class="water-level-container">
             <div class="water-bar">
                <div class="water" id="waterLevelOne" style="height: 0%;"></div>
             </div>
             <div class="ruler-labels">
                <div>10m</div>
                <div>9m</div>
                <div>8m</div>
                <div>7m</div>
                <div>6m</div>
                <div>5m</div>
                <div>4m</div>
                <div>3m</div>
                <div>2m</div>
                <div>1m</div>
                <div>0m</div>
             </div>
          </div>
          <div class="container box-table">
              <table class="table table-bordered text-center">
                 <tbody>
                     <tr class="table-info">
                         <th>7 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>6 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>5 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>4 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>3 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>2 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>1 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>0.1 meter</th>
                     </tr>
                 </tbody>
                 <tbody>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen7M">{{$data->tStorageWhen7M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen6M">{{$data->tStorageWhen6M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen5M">{{$data->tStorageWhen5M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen4M">{{$data->tStorageWhen4M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen3M">{{$data->tStorageWhen3M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen2M">{{$data->tStorageWhen2M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen1M">{{$data->tStorageWhen1M}}° C</th>
                     </tr>
                     <tr class="table-dark">
                         <th id="tStorageOneWhen0M">{{$data->tStorageWhen0M}}° C</th>
                     </tr>
                 </tbody>
             </table>
         </div>
       </div>
       <div class="linebottom mb-3 ">
          <h6 class="text-center m-2 p-1" style="color: white;">
             OIL STORAGE TANK 1
          </h6>
       </div>
       <div class="boxed text-center">
          <div class="row boxed-table top">
             <div class="col-4 boxed-item ">Factor Koreksi</div>
             <div class="col-2 boxed-item">Density</div>
             <div class="col-6 boxed-item text-center">Estimasi Stock CPO(Kg)</div>
          </div>
          <div class="row boxed-table bottom">
             <div class="col-4 boxed-item" id="factorKoreksiOne">{{$data->factorKoreksi}}</div>
             <div class="col-2 boxed-item" id="densityOne">{{$data->density}}</div>
             <div class="col-6 boxed-item" id="EstimasiStokOne">{{$data->EstimasiStok}}</div>
          </div>
       </div>
    </div>
    {{-- STORAGE 2 --}}
    <div class="col-lg-4 col-md-6 m-0  mb-4">
       <div class="container text-box text-center">
          <div class="row">
             <div class="container cpo bg-info">Tinggi CP0 (mm)</div>
          </div>
          <div class="row">
             <div class="container cpo height" id="heightOfCPO2">{{$data2->heightOfCPO}}</div>
          </div>
       </div>
       <div class="linetop"></div>
       <div class="tank">
          <div class="water-level-container">
             <div class="water-bar">
                <div class="water" id="waterLevelTwo" style="height: 0%;"></div>
             </div>
             <div class="ruler-labels">
                <div>10m</div>
                <div>9m</div>
                <div>8m</div>
                <div>7m</div>
                <div>6m</div>
                <div>5m</div>
                <div>4m</div>
                <div>3m</div>
                <div>2m</div>
                <div>1m</div>
                <div>0m</div>
             </div>
          </div>
          <div class="container box-table">
              <table class="table table-bordered text-center">
                 <tbody>
                    <tr class="table-info">
                        <th>7 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>6 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>5 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>4 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>3 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>2 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>1 meter</th>
                    </tr>
                    <tr class="table-info">
                        <th>0.1 meter</th>
                    </tr>
                 </tbody>
                 <tbody>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen7M">{{$data2->tStorageWhen7M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen6M">{{$data2->tStorageWhen6M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen5M">{{$data2->tStorageWhen5M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen4M">{{$data2->tStorageWhen4M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen3M">{{$data2->tStorageWhen3M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen2M">{{$data2->tStorageWhen2M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen1M">{{$data2->tStorageWhen1M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageTwoWhen0M">{{$data2->tStorageWhen0M}}° C</th>
                    </tr>
                 </tbody>
             </table>
         </div>
       </div>
       <div class="linebottom mb-3 ">
          <h6 class="text-center m-2 p-1" style="color: white;">
             OIL STORAGE TANK 2
          </h6>
       </div>
       <div class="boxed text-center">
          <div class="row boxed-table top">
             <div class="col-4 boxed-item ">Factor Koreksi</div>
             <div class="col-2 boxed-item">Density</div>
             <div class="col-6 boxed-item text-center">Estimasi Stock CPO(Kg)</div>
          </div>
          <div class="row boxed-table bottom">
             <div class="col-4 boxed-item" id="factorKoreksiTwo">{{$data2->factorKoreksi}}</div>
             <div class="col-2 boxed-item" id="densityTwo">{{$data2->density}}</div>
             <div class="col-6 boxed-item" id="EstimasiStokTwo">{{$data2->EstimasiStok}}</div>
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-6 m-0  mb-4">
       <div class="container text-box text-center">
          <div class="row">
             <div class="container cpo bg-info">Tinggi CP0 (mm)</div>
          </div>
          <div class="row">
             <div class="container cpo height" id="heightOfCPO3">{{$data3->heightOfCPO}}</div>
          </div>
       </div>
       <div class="linetop"></div>
       <div class="tank">
          <div class="water-level-container">
             <div class="water-bar">
                <div class="water" id="waterLevelThree" style="height: 0%;"></div>
             </div>
             <div class="ruler-labels">
                <div>10m</div>
                <div>9m</div>
                <div>8m</div>
                <div>7m</div>
                <div>6m</div>
                <div>5m</div>
                <div>4m</div>
                <div>3m</div>
                <div>2m</div>
                <div>1m</div>
                <div>0m</div>
             </div>
          </div>
          <div class="container box-table">
              <table class="table table-bordered text-center">
                 <tbody>
                     <tr class="table-info">
                         <th>7 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>6 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>5 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>4 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>3 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>2 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>1 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>0.1 meter</th>
                     </tr>
                 </tbody>
                 <tbody>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen7M">{{$data3->tStorageWhen7M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen6M">{{$data3->tStorageWhen6M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen5M">{{$data3->tStorageWhen5M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen4M">{{$data3->tStorageWhen4M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen3M">{{$data3->tStorageWhen3M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen2M">{{$data3->tStorageWhen2M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen1M">{{$data3->tStorageWhen1M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageThreeWhen0M">{{$data3->tStorageWhen0M}}° C</th>
                    </tr>
                 </tbody>
             </table>
         </div>
       </div>
       <div class="linebottom mb-3 ">
          <h6 class="text-center m-2 p-1" style="color: white;">
             OIL STORAGE TANK 3
          </h6>
       </div>
       <div class="boxed text-center">
          <div class="row boxed-table top">
             <div class="col-4 boxed-item ">Factor Koreksi</div>
             <div class="col-2 boxed-item">Density</div>
             <div class="col-6 boxed-item text-center">Estimasi Stock CPO(Kg)</div>
          </div>
          <div class="row boxed-table bottom">
             <div class="col-4 boxed-item" id="factorKoreksiThree">{{$data3->factorKoreksi}}</div>
             <div class="col-2 boxed-item" id="densityThree">{{$data3->density}}</div>
             <div class="col-6 boxed-item" id="EstimasiStokThree">{{$data3->EstimasiStok}}</div>
          </div>
       </div>
    </div>
    <div class="col-lg-4 col-md-6 m-0  mb-4">
       <div class="container text-box text-center">
          <div class="row">
             <div class="container cpo bg-info">Tinggi CP0 (mm)</div>
          </div>
          <div class="row">
             <div class="container cpo height" id="heightOfCPO4">{{$data4->heightOfCPO}}</div>
          </div>
       </div>
       <div class="linetop"></div>
       <div class="tank">
          <div class="water-level-container">
             <div class="water-bar">
                <div class="water" id="waterLevelFour" style="height: 0%;"></div>
             </div>
             <div class="ruler-labels">
                <div>10m</div>
                <div>9m</div>
                <div>8m</div>
                <div>7m</div>
                <div>6m</div>
                <div>5m</div>
                <div>4m</div>
                <div>3m</div>
                <div>2m</div>
                <div>1m</div>
                <div>0m</div>
             </div>
          </div>
          <div class="container box-table">
              <table class="table table-bordered text-center">
                 <tbody>
                     <tr class="table-info">
                         <th>7 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>6 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>5 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>4 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>3 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>2 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>1 meter</th>
                     </tr>
                     <tr class="table-info">
                         <th>0.1 meter</th>
                     </tr>
                 </tbody>
                 <tbody>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen7M">{{$data4->tStorageWhen7M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen6M">{{$data4->tStorageWhen6M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen5M">{{$data4->tStorageWhen5M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen4M">{{$data4->tStorageWhen4M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen3M">{{$data4->tStorageWhen3M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen2M">{{$data4->tStorageWhen2M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen1M">{{$data4->tStorageWhen1M}}° C</th>
                    </tr>
                    <tr class="table-dark">
                        <th id="tStorageFourWhen0M">{{$data4->tStorageWhen0M}}° C</th>
                    </tr>
                 </tbody>
             </table>
         </div>
       </div>
       <div class="linebottom mb-3 ">
          <h6 class="text-center m-2 p-1" style="color: white;">
             OIL STORAGE TANK 4
          </h6>
       </div>
       <div class="boxed text-center">
          <div class="row boxed-table top">
             <div class="col-4 boxed-item ">Factor Koreksi</div>
             <div class="col-2 boxed-item">Density</div>
             <div class="col-6 boxed-item text-center">Estimasi Stock CPO(Kg)</div>
          </div>
          <div class="row boxed-table bottom">
             <div class="col-4 boxed-item" id="factorKoreksiFour">{{$data4->factorKoreksi}}</div>
             <div class="col-2 boxed-item" id="densityFour">{{$data4->density}}</div>
             <div class="col-6 boxed-item" id="EstimasiStokFour">{{$data4->EstimasiStok}}</div>
          </div>
       </div>
    </div>
 </div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 <script src="{{asset("js/storage.js")}}"></script>


<script>
    setWaterLevel({{$data->heightOfCPO}},'waterLevelOne');
    setWaterLevel({{$data2->heightOfCPO}},'waterLevelTwo');
    setWaterLevel({{$data3->heightOfCPO}},'waterLevelThree');
    setWaterLevel({{$data4->heightOfCPO}},'waterLevelFour');
</script>
@endsection

