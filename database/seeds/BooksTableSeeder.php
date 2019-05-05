<?php

use Illuminate\Database\Seeder;
use App\Book;
use App\Image;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Buch anlegen
        $book = new \App\Book;
        $book -> isbn = "123456789" ;
        $book -> title = "Harry Potter" ;
        $book -> subtitle = "Und der Stein der Weisen" ;
        $book -> rating = 7 ;
        $book -> description = "Bis zu seinem elften Geburtstag glaubt Harry, er sei ein ganz normaler Junge.
                                Doch dann erfährt er, dass er sich an der Schule für Hexerei und Zauberei 
                                einfinden soll – denn er ist ein Zauberer! In Hogwarts stürzt Harry von 
                                einem Abenteuer ins nächste und muss gegen Bestien, Mitschüler und 
                                Fabelwesen kämpfen. Da ist es gut, dass er schon Freunde gefunden hat, 
                                die ihm im Kampf gegen die dunklen Mächte zur Seite stehen.
                                Dies ist der erste Band der international erfolgreichen Harry-Potter-Serie,
                                die Generationen geprägt hat." ;
        $book -> published = new DateTime();
        $book -> netAmount = 8.99;
        $book -> user_id = 1;
        $book->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book->authors()->sync($authors);
        $book->save();

        //Bestellung zuweisen
        $orders = App\Order::all()->pluck("id");
        $book->orders()->sync($orders);
        $book->save();


        //Buch2
        $book2 = new \App\Book;
        $book2 -> title = "Harry Potter" ;
        $book2 -> isbn = "1234567810" ;
        $book2 -> subtitle = "Und die Kammer des Schreckens" ;
        $book2-> rating = 7 ;
        $book2 -> description = "Endlich wieder Schule! Einen solchen Seufzer kann nur der ausstoßen, dessen
                                Ferien scheußlich waren: Harry Potter. Doch wie im vergangenen Schuljahr 
                                stehen nicht nur Zaubertrankunterricht und Verwandlung auf dem Programm. 
                                Ein grauenhaftes Etwas treibt sein Unwesen in der Schule. Wird Harry mit 
                                Hilfe seiner Freunde Ron und Hermine das Rätsel lösen und Hogwarts von den 
                                dunklen Mächten befreien können?
                                Dies ist der zweite Band der international erfolgreichen Harry-Potter-Serie, 
                                die Generationen geprägt hat." ;
        $book2 -> published = new DateTime();
        $book2 -> netAmount = 8.99;
        $book2 -> user_id = 1;
        $book2->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book2->authors()->sync($authors);
        $book2->save();


        //Buch3
        $book3 = new \App\Book;
        $book3 -> title = "Harry Potter" ;
        $book3 -> isbn = "1234567811" ;
        $book3 -> subtitle = "Und der Gefangene von Askaban" ;
        $book3 -> rating = 10 ;
        $book3 -> description = "Natürlich weiß Harry, dass das Zaubern in den Ferien strengstens verboten 
                                ist, und trotzdem befördert er seine schreckliche Tante mit einem 
                                Schwebezauber an die Decke. Die Konsequenz ist normalerweise: Schulverweis!
                                Doch Harry wird behandelt wie ein rohes Ei. Hat es etwa damit zu tun, 
                                dass ein gefürchteter Verbrecher es auf Harry abgesehen hat? Mit Ron und 
                                Hermine versucht Harry ein Geflecht aus Verrat und Rache aufzudröseln und 
                                stößt dabei auf Dinge, die ihn fast an seinem Verstand zweifeln lassen.
                                Dies ist der dritte Band der Harry-Potter-Serie, 
                                die Generationen geprägt hat." ;
        $book3 -> published = new DateTime();
        $book3 -> netAmount = 18.99;
        $book3 -> user_id = 1;
        $book3->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book3->authors()->sync($authors);
        $book3->save();


        //Buch4
        $book4 = new \App\Book;
        $book4 -> isbn = "1234567812" ;
        $book4 -> title = "Harry Potter" ;
        $book4 -> subtitle = "Und der Feuerkelch" ;
        $book4 -> rating = 8 ;
        $book4 -> description = "Harrys viertes Schuljahr in Hogwarts beginnt und ein Wettkampf hält die 
                                Schüler in Atem: das Trimagische Turnier, in dem Harry eine Rolle übernimmt, 
                                die er sich im Traum nicht vorgestellt hätte. Natürlich steckt dahinter das 
                                Böse, das zurück an die Macht drängt: Lord Voldemort. Es wird eng für Harry. 
                                Doch auf seine Freunde und ihre Unterstützung kann er sich auch in 
                                verzweifelten Situationen verlassen.
                                Dies ist der vierte Band der international erfolgreichen Harry-Potter-Serie,
                                die Generationen geprägt hat." ;
        $book4 -> published = new DateTime();
        $book4 -> netAmount = 24.99;
        $book4 -> user_id = 1;
        $book4->save(); //nötig! Obwohl später nochmal gespeichert wird, sonst hat er später keine ID

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book4->authors()->sync($authors);
        $book4->save();


        //Buch5
        $book5 = new \App\Book;
        $book5 -> isbn = "1234567813" ;
        $book5 -> title = "Harry Potter" ;
        $book5 -> subtitle = "Und der Orden des Phönix" ;
        $book5 -> rating = 10 ;
        $book5 -> description = "Es sind Sommerferien und wieder einmal sitzt Harry bei den unsäglichen 
                                Dursleys fest. Doch diesmal treibt ihn größere Unruhe denn je – warum 
                                erfährt er nichts über die dunklen Mächte, die inzwischen neu erstanden 
                                sind? Noch ahnt er nicht, was der geheimnisvolle Orden des Phönix gegen 
                                Voldemort ausrichten kann ... Doch dann schlägt der Dunkle Lord wieder zu. 
                                Harry muss seine Freunde um sich scharen, sonst gibt es kein Entrinnen.
                                Dies ist der fünfte Band der international erfolgreichen Harry-Potter-Serie, 
                                die Generationen geprägt hat." ;
        $book5 -> published = new DateTime();
        $book5 -> netAmount = 29.99;
        $book5 -> user_id = 1;
        $book5->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book5->authors()->sync($authors);
        $book5->save();

        //Buch6
        $book6 = new \App\Book;
        $book6 -> isbn = "1234567814" ;
        $book6 -> title = "Harry Potter" ;
        $book6 -> subtitle = "Und der Halbblutprinz" ;
        $book6 -> rating = 8 ;
        $book6 -> description = "Seit Voldemort, der gefährlichste schwarze Magier aller Zeiten, 
                                zurückgekehrt ist, herrschen Aufruhr und Gewalt in der magischen Welt. 
                                Als Harry und seine Freunde Ron und Hermine zu ihrem sechsten Schuljahr 
                                nach Hogwarts kommen, gelten strengste Sicherheitsmaßnahmen in der
                                Zauberschule. Um Harry gegen das Böse zu wappnen, erforscht Dumbledore mit 
                                ihm die Geschichte des Dunklen Lords. Ob auch Harrys Zaubertrankbuch, das 
                                früher einem »Halbblutprinzen« gehörte, ihm helfen kann?
                                Dies ist der sechste Band der international erfolgreichen Harry-Potter-Serie,
                                die Generationen geprägt hat." ;
        $book6 -> published = new DateTime();
        $book6 -> netAmount = 23.99;
        $book6 -> user_id = 1;
        $book6->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book6->authors()->sync($authors);
        $book6->save();


        //Buch7
        $book7 = new \App\Book;
        $book7 -> isbn = "1234567815" ;
        $book7 -> title = "Harry Potter" ;
        $book7 -> subtitle = "Und die Heiligtümer des Todes" ;
        $book7 -> rating = 10 ;
        $book7 -> description = "An eine Rückkehr nach Hogwarts ist für Harry nicht zu denken. Er muss alles 
                                daransetzen, die übrigen Horkruxe zu finden. Erst wenn sie zerstört sind, 
                                kann Voldemorts Schreckensherrschaft vergehen. Mit Ron und Hermine an 
                                seiner Seite begibt sich Harry auf eine gefährliche Reise durch das ganze 
                                Land. Als die drei auf die rätselhaften Heiligtümer des Todes stoßen, muss 
                                Harry sich entscheiden. Soll er dieser Spur folgen? Doch welche Wahl er auch 
                                trifft – am Ende des Weges wird der Dunkle Lord auf ihn warten …
                                Dies ist der siebte und letzte Band der international erfolgreichen 
                                Harry-Potter-Serie, die Generationen geprägt hat." ;
        $book7 -> published = new DateTime();
        $book7 -> netAmount = 26.99;
        $book7 -> user_id = 1;
        $book7->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Rowling')->pluck("id");
        $book7->authors()->sync($authors);
        $book7->save();


        //Buch8
        $book8 = new \App\Book;
        $book8 -> isbn = "1234567816" ;
        $book8 -> title = "Das Lied von Eis und Feuer" ;
        $book8 -> subtitle = "Die Herren von Winterfell" ;
        $book8 -> rating = 8 ;
        $book8 -> description = "Eddard Stark, der Herr von Winterfell, wird an den Hof seines Königs gerufen, 
                                um diesem als Berater und Vertrauter zur Seite zu stehen. Doch Intriganten, Meuchler 
                                und skrupellose Adlige scharen sich um den Thron, deren Einflüsterungen der schwache 
                                König nichts entgegenzusetzen hat. Während Eddard sich von mächtigen Feinden umringt 
                                sieht, steht sein Sohn, der zukünftige Herrscher des Nordens, einer uralten finsteren 
                                Macht gegenüber. Die Zukunft des Reiches hängt von den Herren von Winterfell ab!" ;
        $book8 -> published = new DateTime();
        $book8 -> netAmount = 17.00;
        $book8 -> user_id = 1;
        $book8->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id");
        $book8->authors()->sync($authors);
        $book8->save();


        //Buch9
        $book9 = new \App\Book;
        $book9 -> isbn = "1234567817" ;
        $book9 -> title = "Das Lied von Eis und Feuer" ;
        $book9 -> subtitle = "Das Erbe von Winterfell" ;
        $book9 -> rating = 9 ;
        $book9 -> description = "Eddard Stark, der Lord von Winterfell, ist dem Ruf seines Königs und alten Freundes 
                                Robert Baratheon gefolgt und hat seine kalte Heimat im hohen Norden verlassen, 
                                um als Hand – als Roberts Berater und Stellvertreter – zu dienen. Eddard ist ein 
                                geradliniger, tapferer und aufrechter Mann, der sich jeder Gefahr mit dem Schwert 
                                entgegenstellen würde – doch die Ränke der Mächtigen bei Hof sind nichts, was man mit 
                                einem Schwert bekämpfen kann. Auch dann nicht, wenn man die Hand des Königs ist ..." ;
        $book9 -> published = new DateTime();
        $book9 -> netAmount = 16.00;
        $book9 -> user_id = 1;
        $book9->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id");
        $book9->authors()->sync($authors);
        $book9->save();

        //Buch10
        $book10 = new \App\Book;
        $book10 -> isbn = "1234567818" ;
        $book10 -> title = "Das Lied von Eis und Feuer" ;
        $book10 -> subtitle = "Der Thron der Sieben Königreiche" ;
        $book10 -> rating = 7 ;
        $book10 -> description = "Nach dem Tod seines Vaters ist es an dem erst fünfzehnjährigen Robb Stark, die 
                                Herrschaft über Winterfell und damit über den ganzen Norden von Westeros anzutreten. 
                                Robb kämpft noch um die Anerkennung und den Respekt seiner Untertanen, da bricht im 
                                Reich ein Bürgerkrieg aus. Für Robb stellt sich allerdings kaum die Frage, auf welcher 
                                Seite er kämpfen wird, denn der junge König Joffrey Baratheon hält seine Schwestern als 
                                Geisel. Und während das Reich zerbricht, wächst im eisigen Norden eine viel größere 
                                Gefahr heran …" ;
        $book10 -> published = new DateTime();
        $book10 -> netAmount = 16.00;
        $book10 -> user_id = 1;
        $book10 ->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id");
        $book10->authors()->sync($authors);
        $book10->save();


        //Buch11
        $book11 = new \App\Book;
        $book11 -> isbn = "1234567819" ;
        $book11 -> title = "Das Lied von Eis und Feuer" ;
        $book11 -> subtitle = "Die Saat des goldenen Löwen" ;
        $book11 -> rating = 7 ;
        $book11 -> description = "Bürgerkrieg zerreißt das Reich Westeros, und der junge grausame König Joffrey 
                                  Baratheon hält die Schwestern Sansa und Arya Stark als Geiseln, um ihren Bruder zur 
                                  Treue zu zwingen. Während die ältere Sansa versuchen will, das beste aus der Situation 
                                  zu machen, entscheidet sich Arya zur Flucht. Doch der Weg zu ihrer sicheren Heimat in 
                                  Winterfell ist lang, und die verschiedenen Parteien, die im Bürgerkrieg 
                                  aufeinanderprallen, sind nicht die einzige Gefahr für das junge Mädchen …" ;
        $book11 -> published = new DateTime();
        $book11 -> netAmount = 18.00;
        $book11 -> user_id = 1;
        $book11 ->save();

        //Autoren zuweisen
        $authors = App\Author::where('lastName', 'Martin')->pluck("id");
        $book11->authors()->sync($authors);
        $book11->save();

    }
}

