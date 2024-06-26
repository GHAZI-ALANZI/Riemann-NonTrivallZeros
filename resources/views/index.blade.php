@extends('layout._shared')1

@section('content')
<section >
    <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
        <div class="mr-auto place-self-center lg:col-span-7">
            <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Riemann Hypothesis</h1>
            <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">In mathematics, the Riemann hypothesis is the conjecture that the Riemann zeta function has its zeros only at the negative even integers and...</p>
            <a href="{{route('main')}}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                Read more
                <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
            
        </div>
        <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
            
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="polar_zeta_plot" version="1.1" baseProfile="full" width="450" height="500" viewBox="0 0 560 480">
                <g style="fill:none; color:rgb(177, 7, 7); stroke:rgb(0, 0, 0); stroke-width:3.00">
                  <g transform="translate(300,25)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                    <text>Polar graph of Riemann zeta(½ + it)</text>
                    </g>
                     <g id="captions">
                    <g transform="translate(130,55) rotate(-90)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>Im ζ(½ + it)</text>
                    </g>
                    <g transform="translate(464,350)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:19.00; text-anchor:start">
                      <text>Re ζ(½ + it)</text>
                    </g>
                  </g>
                
                  <g transform="translate(190,260)">
                    <path style="fill:none; color:black; stroke:rgb(255, 254, 254); stroke-width:10.00" d="M -150,0 H 300 M 0,-200 V 200"/>
                
                    <path d="M -9,200 H 9"/>
                    <g transform="translate(-10,204)" style="stroke:none; fill:rgb(253, 253, 253); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>-2</text>
                    </g>
                    <path d="M -9,150 H 9"/>
                    <g transform="translate(-10,154)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>-1.5</text>
                    </g>
                    <path d="M -9,100 H 9"/>
                    <g transform="translate(-10,104)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>-1</text>
                    </g>
                    <path d="M -9,50 H 9"/>
                    <g transform="translate(-10,54)" style="stroke:none; fill:rgb(255, 247, 247); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>-0.5</text>
                    </g>
                    <path d="M -9,0 H 9"/>
                    <g transform="translate(-10,4)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>0</text>
                    </g>
                    <path d="M -9,-50 H 9"/>
                    <g transform="translate(-10,-46)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>0.5</text>
                    </g>
                    <path d="M -9,-100 H 9"/>
                    <g transform="translate(-10,-96)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>1</text>
                    </g>
                    <path d="M -9,-150 H 9"/>
                    <g transform="translate(-10,-146)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>1.5</text>
                    </g>
                    <path d="M -9,-200 H 9"/>
                    <g transform="translate(-10,-196)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:end">
                      <text>2</text>
                    </g>
                
                    <path d="M -150,-9 V 9"/>
                    <g transform="translate(-152,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>-1.5</text>
                    </g>
                    <path d="M -100,-9 V 9"/>
                    <g transform="translate(-102,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>-1</text>
                    </g>
                    <path d="M -50,-9 V 9"/>
                    <g transform="translate(-52,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>-0.5</text>
                    </g>
                    <path d="M 0,-9 V 9"/>
                    <g transform="translate(0,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>0</text>
                    </g>
                    <path d="M 50,-9 V 9"/>
                    <g transform="translate(50,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>0.5</text>
                    </g>
                    <path d="M 100,-9 V 9"/>
                    <g transform="translate(100,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>1</text>
                    </g>
                    <path d="M 150,-9 V 9"/>
                    <g transform="translate(150,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>1.5</text>
                    </g>
                    <path d="M 200,-9 V 9"/>
                    <g transform="translate(200,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>2</text>
                    </g>
                    <path d="M 250,-9 V 9"/>
                    <g transform="translate(250,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>2.5</text>
                    </g>
                    <path d="M 300,-9 V 9"/>
                    <g transform="translate(300,30)" style="stroke:none; fill:rgb(255, 255, 255); font-family:Arial; font-size:30.00; text-anchor:middle">
                      <text>3</text>
                    </g>
                
                  </g>
                </g>
                <g transform="translate(190,260) scale(100, -100)" style="fill:none; stroke:#0000ff; stroke-width:0.03; stroke-linecap:butt; stroke-linejoin:round">
                  <path id="graph" stroke-width="0.02" stroke="red" d="M -1.460355,0.000000 C -1.460355,-0.165395 -1.417675,-0.328009 -1.336424,-0.472120 C -1.255201,-0.616182 -1.138157,-0.736922 -0.996534,-0.822649 C -0.856316,-0.907525 -0.696538,-0.955335 -0.532157,-0.961338 C -0.347557,-0.968079 -0.162934,-0.921884 0.000000,-0.825514 C 0.068782,-0.784832 0.151171,-0.724876 0.231727,-0.636838 C 0.289531,-0.573665 0.333843,-0.509754 0.368155,-0.451923 C 0.408602,-0.383752 0.439637,-0.316472 0.465743,-0.253049 C 0.502295,-0.164248 0.530521,-0.079754 0.564151,0.000000 C 0.592042,0.066145 0.625025,0.132328 0.670361,0.192586 C 0.700233,0.232291 0.742686,0.279030 0.801237,0.318290 C 0.889755,0.377643 0.989923,0.402966 1.087645,0.396889 C 1.190964,0.390465 1.290145,0.349056 1.370056,0.278457 C 1.450347,0.207522 1.507457,0.110412 1.531821,0.000000 C 1.554522,-0.102882 1.547833,-0.212991 1.510908,-0.317883 C 1.472922,-0.425788 1.404431,-0.523931 1.311386,-0.600799 C 1.213660,-0.681534 1.092684,-0.735629 0.960665,-0.755604 C 0.824711,-0.776174 0.682253,-0.759771 0.548235,-0.706269 C 0.411504,-0.651684 0.288577,-0.560485 0.192633,-0.440293 C 0.093034,-0.315522 0.026111,-0.164016 0.000000,0.000000 C -0.016284,0.102290 -0.016410,0.207676 0.000000,0.312270 C 0.026971,0.484181 0.097860,0.649223 0.207381,0.791499 C 0.319267,0.936847 0.467719,1.053560 0.639866,1.129932 C 0.817263,1.208633 1.013835,1.241842 1.211439,1.225399 C 1.411490,1.208752 1.605887,1.141775 1.776427,1.029876 C 1.946114,0.918537 2.086667,0.766343 2.185168,0.586523 C 2.283524,0.406969 2.336822,0.205584 2.340182,0.000000 C 2.343537,-0.205341 2.296965,-0.408402 2.204635,-0.591445 C 2.112544,-0.774016 1.977839,-0.930911 1.812674,-1.048626 C 1.647238,-1.166535 1.456567,-1.241341 1.258118,-1.267033 C 1.061835,-1.292444 0.864359,-1.268977 0.683582,-1.199887 C 0.508097,-1.132820 0.354051,-1.024941 0.234575,-0.887132 C 0.117081,-0.751610 0.036899,-0.591617 0.000000,-0.422776 C -0.031013,-0.280866 -0.030613,-0.136528 0.000000,0.000000 C 0.031568,0.140790 0.094398,0.269415 0.182105,0.376075 C 0.267696,0.480161 0.374524,0.560345 0.492789,0.611034 C 0.608688,0.660709 0.732182,0.680604 0.852272,0.670251 C 0.970169,0.660088 1.081283,0.621074 1.175867,0.557731 C 1.269081,0.495305 1.343450,0.411119 1.392519,0.313476 C 1.441514,0.215980 1.463801,0.108021 1.457427,0.000000 C 1.450439,-0.118431 1.409247,-0.232810 1.338087,-0.329940 C 1.265149,-0.429498 1.163436,-0.507238 1.043752,-0.553303 C 0.923086,-0.599745 0.788535,-0.612303 0.654230,-0.587797 C 0.513480,-0.562115 0.378156,-0.496669 0.263479,-0.396113 C 0.146150,-0.293231 0.054620,-0.157267 0.000000,0.000000 C -0.036497,0.105087 -0.055841,0.217758 -0.056504,0.333602 C -0.057183,0.451969 -0.038349,0.571976 0.000000,0.688810 C 0.060212,0.872250 0.166895,1.042894 0.312882,1.184519 C 0.461931,1.329114 0.647257,1.438904 0.854556,1.502832 C 1.066561,1.568211 1.295105,1.583635 1.521801,1.545971 C 1.752884,1.507579 1.975187,1.415163 2.170466,1.274706 C 2.369041,1.131879 2.533861,0.943555 2.651149,0.723925 C 2.769809,0.501726 2.836367,0.253950 2.845091,0.000000 C 2.853703,-0.250683 2.805716,-0.500284 2.704857,-0.729757 C 2.605180,-0.956539 2.456635,-1.157355 2.270929,-1.317426 C 2.087941,-1.475153 1.873949,-1.588944 1.645657,-1.651256 C 1.421475,-1.712446 1.189814,-1.722272 0.968472,-1.681746 C 0.752334,-1.642173 0.552298,-1.555735 0.383121,-1.431382 C 0.218276,-1.310213 0.087755,-1.156742 0.000000,-0.985539 C -0.088353,-0.813170 -0.130285,-0.628817 -0.125845,-0.450924 C -0.121676,-0.283906 -0.076787,-0.128854 0.000000,0.000000 C 0.060991,0.102348 0.140206,0.184970 0.229459,0.243423 C 0.313895,0.298722 0.404805,0.330744 0.493528,0.339308 C 0.577056,0.347369 0.656131,0.334397 0.723670,0.303806 C 0.788520,0.274434 0.840785,0.229701 0.875918,0.175464 C 0.910433,0.122179 0.927375,0.061323 0.925265,0.000000 C 0.922716,-0.074051 0.892495,-0.145794 0.838253,-0.203139 C 0.782237,-0.262359 0.703138,-0.303544 0.610787,-0.317911 C 0.511467,-0.333363 0.401498,-0.317071 0.295592,-0.266539 C 0.182050,-0.212363 0.078488,-0.121365 0.000000,0.000000 C -0.058121,0.089872 -0.100980,0.194066 -0.124724,0.307827 C -0.149417,0.426137 -0.152938,0.552407 -0.133479,0.680485 C -0.113235,0.813728 -0.068510,0.946375 0.000000,1.071678 C 0.057094,1.176101 0.129947,1.274035 0.216932,1.362097 C 0.305943,1.452209 0.408731,1.530951 0.522642,1.595493"/>
                </g>
                </svg>
        </div>                
    </div>
</section>
    
    
      
              


    
@endsection