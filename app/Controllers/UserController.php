<?php namespace App\Controllers; 


use App\Models\Users;
class UserController extends BaseController
{
    public function index(){

       
        return view('users/index');
    }

    public function inscription(){
        return view('users/inscription');
    }

    public function userStore(){

        $user= new Users();

        $data = [
             'Nom'=>$this->request->getPost('nom'),
             'Prenom'=>$this->request->getPost('prenom'),
             'CIN'=>$this->request->getPost('cin'),
             'Adresse'=>$this->request->getPost('adress'),
             'Telephone'=>$this->request->getPost('telephone'),
             'Email'=>$this->request->getPost('email'),
             'Mdp'=> $this->request->getPost('mdp'),

        ];

        $user->insert($data);

        session()->setFlashdata('status','Client enregistré');

        return redirect()->to(base_url('public/'));
    }


    public function accueil(){

        if ($this->session->get('user')) {
            // Récupérez le nom de l'utilisateur depuis la session
            $data['welcome_message'] = 'Bonjour ' . $this->session->get('user_name').'!';
            $data['solde']=$this->session->get('solde');
        } else {
            $data['welcome_message'] = 'Bonjour invité';
        }
        return view('users/accueil',$data);
    }



    public function depot(){
        return view('users/depot');
    }

    public function retrait(){
        return view('users/retrait');
    }

   
        public function login(){
            $user= new Users();
    
            $telephone= $this->request->getPost('telephone');
            $mdp= $this->request->getPost('password');
    
            $result=$user->where('Telephone',$telephone)->first();
    
          
    
            if ($result['id'] > 0){
                if ($result['Mdp']==$mdp){
                    
                    $this->session->set("user",$result);
                    $this->session->set('user_name', $result['Nom']);
                    $this->session->set('solde', $result['Solde']);
                    return redirect()->to(base_url('public/accueil'));
                }
                
                else{
                    $this->session->setFlashdata('error', 'Mot de passe incorrect.');
                    return redirect()->to(base_url('public/'));
                }
                    
                
            }
            else{
                $this->session->setFlashdata('error', 'Utilisateur non trouvé.');
                return redirect()->to(base_url('public/'));
            }
        }



        public function faireDepot(){
            $user = new Users();

        
        $montant= $this->request->getPost('montant');
        $telephone= $this->request->getPost('telephone');
        $password = $this->request->getPost('password');

        
        

        
        $result=$user->where('Telephone',$telephone)->first();

        $userId = $result['id'];

        if ($result['id']>0) {
            if ($password==$result['Mdp']) {
                $nvsolde = $result['Solde'] + $montant;
                $user->update($userId, ['Solde' => $nvsolde]);

                return redirect()->to(base_url('public/depot'))->with('success', 'Dépôt effectué avec succès.');
            }

            else {
                
                return redirect()->to(base_url('public/depot'))->with('error', 'Mot de passe incorrect.');
            }
        }

        }


        public function faireRetrait(){
            $user = new Users();

        
        $montant= $this->request->getPost('montant');
        $telephone= $this->request->getPost('telephone');
        $password = $this->request->getPost('password');

        
        

        
        $result=$user->where('Telephone',$telephone)->first();

        $userId = $result['id'];

        if ($result['id']>0) {
            if ($password==$result['Mdp']) {
                $nvsolde = $result['Solde']-$montant;
                $user->update($userId, ['Solde' => $nvsolde]);

                return redirect()->to(base_url('public/retrait'))->with('success', 'Retrait effectué avec succès.');
            }

            else {
                
                return redirect()->to(base_url('public/retrait'))->with('error', 'Mot de passe incorrect.');
            }
        }

        }



        public function back(){
            return view('users/back');
        }

        public function backOffice(){
            return redirect()->to(base_url('public/back'));
        }
    
    }
        
    


?>