<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\RaceTrack;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Pilot;
use App\Models\EventRace;
use App\Models\SessionType;
use App\Models\SessionRace;


class IntegrationController extends Controller
{
    public function saveNewPilot($pilotEmail){
        $newUser = new User;
        $newUser->name = $pilotEmail;
        $newUser->email = $pilotEmail;
        $newUser->email_verified_at = now();
        $newUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; 
        // password
        $newUser->remember_token = Str::random(10);
        $newUser->save();
        $newPilot = new Pilot;
        $newPilot->phone = '(00) 90000-0000';
        $newPilot->usuario()->associate($newUser);
        $newPilot->save();
        return $newUser;
    }
    public function saveNewCar($modelCar, $classCar){
        $newCar = new Car;
        $newCar->model = $modelCar;
        $newCar->class = $classCar;
        $newCar->save();
        return $newCar;
    }
    
    public function saveNewRaceTrack($nameRaceTrack){
        $newRaceTrack = new RaceTrack;
        $newRaceTrack->name = $nameRaceTrack;
        $newRaceTrack->save();
        return $newRaceTrack;
    }
    

    public function integration(Request $request)
    {
        DB::beginTransaction();
        try {
            //code...
            $input = $request->all();
            $pilotEmail = $input['pilotoEmail'];
            $userPilot = User::where('email', $pilotEmail)->first();
            if ($userPilot == null){
                //dd("piloto não encontrado");
                $userPilot = $this->saveNewPilot($pilotEmail);
            }

            foreach($input['sessoes'] as $sessao){
                $carModel = $sessao['carro'];
                $carClass = $sessao['classeCarro'];
                $car = Car::where('model', $carModel)->where('class', $carClass)->first();
                if ($car == null){
                    $car = $this->saveNewCar($carModel, $carClass);
                    // dd($car);
                }
                $raceTrackName = $sessao['autodromo'];
                $raceTrack = RaceTrack::where('name', $raceTrackName)->first();
                if ($raceTrack == null){
                    $raceTrack = $this->saveNewRaceTrack($raceTrackName);
                }
                $event = EventRace::where('name', 'Prospeed 2024')->first();
                $descriptionSessionType = $sessao['tipoSessao'];
                $sessionType = SessionType::where('description', $descriptionSessionType)->first();
                if ($sessionType == null){
                    return response()->json('Tipo de sessão não encontrada!');
                }

                // fazer as associações
                //dd($car);
                $sessionValid = new SessionRace;
                $sessionValid->pilot()->associate($userPilot->pilot);
                $sessionValid->car()->associate($car);
                $sessionValid->racetrack()->associate($raceTrack);
                $sessionValid->event()->associate($event);
                $sessionValid->sessionType()->associate($sessionType);

                $sessionValid->simulator = $input['simulador'];
                $sessionValid->total_laps = $sessao['totalVoltas'];
                $sessionValid->date = $sessao['dataSessao'];
                $sessionValid->save();
                
            }
            
            DB::commit();
            //dd('salvou');
            return response()->json($userPilot, 200);


        } catch (\Throwable $th) {
            throw $th;
        }
        
        
        
       
    }
}