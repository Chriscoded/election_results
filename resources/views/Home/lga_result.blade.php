@extends('layouts.app')

@section('content')
    

        <table class="table">
            
            <thead>
                <tr>
                    <th>
                    LGA
                    </th>
                    <th>
                    Party
                    </th>
                    <th>
                   Votes
                    </th>
                   
                   
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$PDP['party']}}
                </td>
                <td>
                {{$PDP['score']}}
                </td>
            </tbody>


            <tbody>
            <!-- $DPP $ACN $PPA  $CDC $JP $ANPP -->
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$DPP['party']}}
                </td>
                <td>
                {{$DPP['score']}}
                </td>
            </tbody>

            <tbody>
            <!-- $DPP $ACN $PPA  $CDC $JP $ANPP -->
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$ACN['party']}}
                </td>
                <td>
                {{$ACN['score']}}
                </td>
            </tbody>

            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$PPA['party']}}
                </td>
                <td>
                {{$PPA['score']}}
                </td>
            </tbody>

            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$CDC['party']}}
                </td>
                <td>
                {{$CDC['score']}}
                </td>
            </tbody>

            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$JP['party']}}
                </td>
                <td>
                {{$JP['score']}}
                </td>
            </tbody>

            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$ANPP['party']}}
                </td>
                <td>
                {{$ANPP['score']}}
                </td>
            </tbody> 
            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$CPP['party']}}
                </td>
                <td>
                {{$CPP['score']}}
                </td>
            </tbody>
            <tbody>
                <td>
               {{  $lga['0']->lga_name }}
                </td>
                <td>
                {{$LABO['party']}}
                </td>
                <td>
                {{$LABO['score']}}
                </td>
            </tbody>
            
        </table>
            
       
                
    </div>

<script>
       
</script>

 @endsection
