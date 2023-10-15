<?php
    include_once __DIR__ . ("/../models/M_notes.php");

    class noteController
        {
            function create()
                {
                    $info = new m_note();  
                    $note = $info -> create();

                    return $note;
                }


            function read($classe, $examen, $module)
                {
                    $info = new m_note();  
                    $note = $info -> read($classe, $examen, $module);

                    return $note;
                }

            function update()
                {
                    $info = new m_note();  
                    $note = $info -> update();

                    return $note;
                }
             
            function delete($notesByebye)
                {
                    $info = new m_note();  
                    $note = $info -> delete($notesByebye);
                }

            function examen()
                {
                    $info = new m_note();  
                    $note = $info -> examen();

                    return $note;
                }
            

            function module()
                {
                    $info = new m_note();  
                    $note = $info -> module();

                    return $note;
                }


               
            function id_noteChoisir($id_note)
                {
                    $info = new m_note();  
                    $note = $info -> id_noteChoisir($id_note);

                    return $note;
                }
            
            function readOnEtudiant($id_etudiant, $examen)
                {
                    $info = new m_note();  
                    $note = $info -> readOnEtudiant($id_etudiant, $examen);

                    return $note;
                }
            
    }