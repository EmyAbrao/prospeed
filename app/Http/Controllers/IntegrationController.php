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
    }
    public function saveNewCar($modelCar, $classCar){
        $newCar = new Car;
        $newCar->model = $modelCar;
        $newCar->class = $classCar;
        $newCar->save();
    }
    
    public function saveNewRaceTrack($nameRaceTrack){
        $newRaceTrack = new RaceTrack;
        $newRaceTrack->name = $nameRaceTrack;
        $newRaceTrack->save();
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
                $this->saveNewPilot($pilotEmail);
            }

            foreach($input['sessoes'] as $sessao){
                $carModel = $sessao['carro'];
                $carClass = $sessao['classeCarro'];
                $car = Car::where('model', $carModel)->where('class', $carClass)->first();
                if ($car == null){
                    $this->saveNewCar($carModel, $carClass);
                }
                $raceTrackName = $sessao['autodromo'];
                $raceTrack = RaceTrack::where('name', $raceTrackName)->first();
                if ($raceTrack == null){
                    $this->saveNewRaceTrack($raceTrackName);
                }
                $event = EventRace::where('name', 'Prospeed 2024')->first();
                $descriptionSessionType = $sessao['tipoSessao'];
                $sessionType = SessionType::where('description', $descriptionSessionType)->first();
                if ($sessionType == null){
                    return response()->json('Tipo de sessão não encontrada!');
                }
                // fazer as associações
                // $sessionValid = new SessionRace;
                // $sessionValid->pilot()->associate()

            }
            
            DB::commit();
            return response()->json($userPilot, 200);


        } catch (\Throwable $th) {
            //throw $th;
        }
        
        
        
       
    }
}