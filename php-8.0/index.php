<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP 8.0 Updates</title>
  </head>
  <body>
    <!-- https://www.php.net/releases/8.0/en.php -->
    <?php
    // Named arguments RFC
    $someString = "This is some string";
    htmlspecialchars($string, double_encode: false);


    // Attributes
    // class PostsController
      // {
      //     /**
      //      * @Route("/api/posts/{id}", methods={"GET"})
      //      */
      //     public function get($id) { /* ... */ }
      // }
    class PostsController
    {
        #[Route("/api/posts/{id}", methods: ["GET"])]
        public function get($id) { /* ... */ }
    }


    // Constructor property promotion
    /*
    // PHP 7
    class Point {
      public float $x;
      public float $y;
      public float $z;

      public function __construct(
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0
      ) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
      }
    }
    */
    class Point {
      public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
      ) {}
    }




    // Union types
    // PHP 7
    // class Number {
    //   /** @var int|float */
    //   private $number;
    //
    //   /**
    //    * @param float|int $number
    //    */
    //   public function __construct($number) {
    //     $this->number = $number;
    //   }
    // }
    //
    // new Number('NaN'); // Ok
    class Number {
      public function __construct(
        private int|float $number
      ) {}
    }

    new Number('NaN'); // TypeError



    // Match expression
    /*
    // PHP 7
    switch (8.0) {
      case '8.0':
        $result = "Oh no!";
        break;
      case 8.0:
        $result = "This is what I expected";
        break;
    }
    echo $result;
    //> Oh no!
    */
    echo match (8.0) {
      '8.0' => "Oh no!",
      8.0 => "This is what I expected",
    };
    //> This is what I expected




    // Nullsafe operator
    /*
    // PHP 7
    $country =  null;

    if ($session !== null) {
      $user = $session->user;

      if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
          $country = $address->country;
        }
      }
    }
    */
    $country = $session?->user?->getAddress()?->country;






    // Saner string to number comparisons
    /*
    // PHP 7
    0 == 'foobar' // true
    */
    0 == 'foobar' // false





    // Consistent type errors for internal functions
/*
    // PHP 7
    strlen([]); // Warning: strlen() expects parameter 1 to be string, array given

    array_chunk([], -1); // Warning: array_chunk(): Size parameter expected to be greater than 0
    */
    strlen([]); // TypeError: strlen(): Argument #1 ($str) must be of type string, array given
    array_chunk([], -1); // ValueError: array_chunk(): Argument #2 ($length) must be greater than 0





    // Just-In-Time compilation

     ?>
  </body>
</html>
