<?php

    namespace App\Http\Controllers;

    use App\HouseBuilder;
    use Illuminate\Http\Request;

    class HomeController extends Controller
    {

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */
        public function index()
        {
            return view('index');
        }

        public function parseCsv()
        {
            $response_arary = $this->csv_to_array(base_path() . '/public/property-data.csv');
            dump($response_arary);

            foreach ($response_arary as $item) {
                $builder = new HouseBuilder();
                $builder->setName($item['Name']);
                $builder->setPrice($item['Price']);
                $builder->setBedrooms($item['Bedrooms']);
                $builder->setBathrooms($item['Bathrooms']);
                $builder->setStoreys($item['Storeys']);
                $builder->setGarages($item['Garages']);
                $builder->house->save();
            }
        }

        function csv_to_array($filename = '', $delimiter = ',')
        {
            if (!file_exists($filename) || !is_readable($filename)) {
                return false;
            }
            $header = null;
            $data = array();
            if (($handle = fopen($filename, 'r')) !== false) {
                while (($row = fgetcsv($handle, 1000, $delimiter)) !== false) {
                    if (!$header) {
                        $header = $row;
                    } else {
                        $data[] = array_combine($header, $row);
                    }
                }
                fclose($handle);
            }
            return $data;
        }
    }
