@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pricings</h1>
                </div>
               
            </div>
        </div>

        <div class ="body">
            <div class="column">
                <div class="card">
                    <table>
                        <thead>
                            <th>Games</th>
                            <th>Price</th>
                        </thead>
                        <body>
                            <!-- Halo -->
                            <tr>
                                <td><strong>
                                Halo Infinite
                                </strong> : 343 Industries</td>
                                <td><strong> &#8369 2,399.75 </strong></td>
                            </tr>
                            <!-- Back 4 Blood -->
                            <tr>
                                <td><strong>
                                Back 4 Blood
                                </strong> : Turtle Rock Studios</td>
                                <td><strong> &#8369 3,036.25 </strong></td>
                            </tr>

                            <!-- Deathloop -->
                            <tr>
                                <td><strong>
                                Deathloop
                                </strong> : 343 Arkane Studios</td>
                                <td><strong> &#8369 2,599.25 </strong></td>
                            </tr>

                            <!-- Monster Hunter -->
                            <tr>
                                <td><strong>
                                Monster Hunter Rise
                                </strong> : Capcom</td>
                                <td><strong> &#8369 2,700 </strong></td>
                            </tr>

                        </body>
                    </table>

                </div>

        
            </div>  
        </div>    


    </section>




@endsection

