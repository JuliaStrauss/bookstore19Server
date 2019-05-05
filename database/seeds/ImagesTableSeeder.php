<?php

use Illuminate\Database\Seeder;
use App\Book;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image1 = new App\Image();
        $image1->title = "Harry Potter und der Stein der Weisen";
        $image1->url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRakLqTV-_ady5wC30V9EjmNimhaYgTU8ktl8uqo2P4p23OSVJw";
        $book = App\Book::where('isbn', '123456789');
        $image1->book()->associate($book->first());
        $image1->save();

        $image2 = new App\Image();
        $image2->title = "Harry Potter und die Kammer des Schreckens";
        $image2->url = "https://booksection.de/v4/bilder/buch2.jpg";
        $book2 = App\Book::where('isbn', '1234567810');
        $image2->book()->associate($book2->first());
        $image2->save();

        $image3 = new App\Image();
        $image3->title = "Harry Potter und Gefangene von Askaban";
        $image3->url = "https://images-na.ssl-images-amazon.com/images/I/51DAVZuUVyL._SX315_BO1,204,203,200_.jpg";
        $book3 = App\Book::where('isbn', '1234567811');
        $image3->book()->associate($book3->first());
        $image3->save();

        $image4 = new App\Image();
        $image4->title = "Harry Potter und der Feuerkelch";
        $image4->url = "https://assets.thalia.media/img/14642763-00-00.jpg";
        $book4 = App\Book::where('isbn', '1234567812');
        $image4->book()->associate($book4->first());
        $image4->save();

        $image5 = new App\Image();
        $image5->title = "Harry Potter und der Orden des Phönix";
        $image5->url = "https://www.carlsen.de/sites/default/files/styles/product_medium/public/produkt/cover/9783551354051_0.jpg?itok=cLJoPCCK";
        $book5 = App\Book::where('isbn', '1234567813');
        $image5->book()->associate($book5->first());
        $image5->save();

        $image6 = new App\Image();
        $image6->title = "Harry Potter und der Halbblutprinz";
        $image6->url = "https://img2.libreriauniversitaria.it/BDE/300/666/9783551566669.jpg";
        $book6 = App\Book::where('isbn', '1234567814');
        $image6->book()->associate($book6->first());
        $image6->save();

        $image7 = new App\Image();
        $image7->title = "Harry Potter und die Heiligtümer des Todes";
        $image7->url = "https://images-na.ssl-images-amazon.com/images/I/51aupVENKwL.jpg";
        $book7 = App\Book::where('isbn', '1234567815');
        $image7->book()->associate($book7->first());
        $image7->save();

        $image8 = new App\Image();
        $image8->title = "Das Lied von Eis und Feuer 1";
        $image8->url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTfqAdp4gtxFKoDzvVmoca3VY-zsAMx0NSIgpkzYTdgjH9vCIw";
        $book8 = App\Book::where('isbn', '1234567816');
        $image8->book()->associate($book8->first());
        $image8->save();

        $image9 = new App\Image();
        $image9->title = "Das Lied von Eis und Feuer 2";
        $image9->url = "https://images-na.ssl-images-amazon.com/images/I/51O1zKDDw-L._SX313_BO1,204,203,200_.jpg";
        $book9 = App\Book::where('isbn', '1234567817');
        $image9->book()->associate($book9->first());
        $image9->save();

        $image10 = new App\Image();
        $image10->title = "Das Lied von Eis und Feuer 3";
        $image10->url = "https://images-na.ssl-images-amazon.com/images/I/51jgE2ilYaL._SX313_BO1,204,203,200_.jpg";
        $book10 = App\Book::where('isbn', '1234567818');
        $image10->book()->associate($book10->first());
        $image10->save();

        $image11 = new App\Image();
        $image11->title = "Das Lied von Eis und Feuer 4";
        $image11->url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ_5-LkEKLBMvS2VoCuW0b5NOkBCJmrspVnGv77M4pwRdl2_2S";
        $book11= App\Book::where('isbn', '1234567819');
        $image11->book()->associate($book11->first());
        $image11->save();
    }
}
