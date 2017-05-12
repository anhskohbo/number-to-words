<?php

namespace NumberToWords\NumberTransformer;

class MalayNumberTransformerTest extends NumberTransformerTest
{
    public function setUp()
    {
        $this->numberTransformer = new MalayNumberTransformer();
    }

    public function providerItConvertsNumbersToWords()
    {
        return [
            [0, 'kosong'],
            [1, 'satu'],
            [2, 'dua'],
            [3, 'tiga'],
            [4, 'empat'],
            [5, 'lima'],
            [6, 'enam'],
            [7, 'tujuh'],
            [8, 'lapan'],
            [9, 'sembilan'],
            [10, 'sepuluh'],
            [11, 'sebelas'],
            [12, 'dua belas'],
            [13, 'tiga belas'],
            [14, 'empat belas'],
            [15, 'lima belas'],
            [16, 'enam belas'],
            [17, 'tujuh belas'],
            [18, 'lapan belas'],
            [19, 'sembilan belas'],
            [20, 'dua puluh'],
            [21, 'dua puluh satu'],
            [22, 'dua puluh dua'],
            [23, 'dua puluh tiga'],
            [24, 'dua puluh empat'],
            [25, 'dua puluh lima'],
            [26, 'dua puluh enam'],
            [27, 'dua puluh tujuh'],
            [28, 'dua puluh lapan'],
            [29, 'dua puluh sembilan'],
            [30, 'tiga puluh'],
            [31, 'tiga puluh satu'],
            [32, 'tiga puluh dua'],
            [33, 'tiga puluh tiga'],
            [34, 'tiga puluh empat'],
            [35, 'tiga puluh lima'],
            [36, 'tiga puluh enam'],
            [37, 'tiga puluh tujuh'],
            [38, 'tiga puluh lapan'],
            [39, 'tiga puluh sembilan'],
            [40, 'empat puluh'],
            [41, 'empat puluh satu'],
            [42, 'empat puluh dua'],
            [43, 'empat puluh tiga'],
            [44, 'empat puluh empat'],
            [45, 'empat puluh lima'],
            [46, 'empat puluh enam'],
            [47, 'empat puluh tujuh'],
            [48, 'empat puluh lapan'],
            [49, 'empat puluh sembilan'],
            [50, 'lima puluh'],
            [51, 'lima puluh satu'],
            [52, 'lima puluh dua'],
            [53, 'lima puluh tiga'],
            [54, 'lima puluh empat'],
            [55, 'lima puluh lima'],
            [56, 'lima puluh enam'],
            [57, 'lima puluh tujuh'],
            [58, 'lima puluh lapan'],
            [59, 'lima puluh sembilan'],
            [60, 'enam puluh'],
            [61, 'enam puluh satu'],
            [62, 'enam puluh dua'],
            [63, 'enam puluh tiga'],
            [64, 'enam puluh empat'],
            [65, 'enam puluh lima'],
            [66, 'enam puluh enam'],
            [67, 'enam puluh tujuh'],
            [68, 'enam puluh lapan'],
            [69, 'enam puluh sembilan'],
            [70, 'tujuh puluh'],
            [71, 'tujuh puluh satu'],
            [72, 'tujuh puluh dua'],
            [73, 'tujuh puluh tiga'],
            [74, 'tujuh puluh empat'],
            [75, 'tujuh puluh lima'],
            [76, 'tujuh puluh enam'],
            [77, 'tujuh puluh tujuh'],
            [78, 'tujuh puluh lapan'],
            [79, 'tujuh puluh sembilan'],
            [80, 'lapan puluh'],
            [81, 'lapan puluh satu'],
            [82, 'lapan puluh dua'],
            [83, 'lapan puluh tiga'],
            [84, 'lapan puluh empat'],
            [85, 'lapan puluh lima'],
            [86, 'lapan puluh enam'],
            [87, 'lapan puluh tujuh'],
            [88, 'lapan puluh lapan'],
            [89, 'lapan puluh sembilan'],
            [90, 'sembilan puluh'],
            [91, 'sembilan puluh satu'],
            [92, 'sembilan puluh dua'],
            [93, 'sembilan puluh tiga'],
            [94, 'sembilan puluh empat'],
            [95, 'sembilan puluh lima'],
            [96, 'sembilan puluh enam'],
            [97, 'sembilan puluh tujuh'],
            [98, 'sembilan puluh lapan'],
            [99, 'sembilan puluh sembilan'],
            [100, 'seratus'],
            [101, 'seratus satu'],
            [102, 'seratus dua'],
            [103, 'seratus tiga'],
            [104, 'seratus empat'],
            [105, 'seratus lima'],
            [106, 'seratus enam'],
            [107, 'seratus tujuh'],
            [108, 'seratus lapan'],
            [109, 'seratus sembilan'],
            [110, 'seratus sepuluh'],
            [123, 'seratus dua puluh tiga'],
            [200, 'dua ratus'],
            [300, 'tiga ratus'],
            [321, 'tiga ratus dua puluh satu'],
            [400, 'empat ratus'],
            [500, 'lima ratus'],
            [600, 'enam ratus'],
            [700, 'tujuh ratus'],
            [800, 'lapan ratus'],
            [900, 'sembilan ratus'],
            [909, 'sembilan ratus sembilan'],
            [990, 'sembilan ratus sembilan puluh'],
            [999, 'sembilan ratus sembilan puluh sembilan'],
            [1000, 'seribu'],
            [1001, 'seribu satu'],
            [1008, 'seribu lapan'],
            [1234, 'seribu dua ratus tiga puluh empat'],
            [2000, 'dua ribu'],
            [3000, 'tiga ribu'],
            [4000, 'empat ribu'],
            [4321, 'empat ribu tiga ratus dua puluh satu'],
            [5000, 'lima ribu'],
            [6000, 'enam ribu'],
            [7000, 'tujuh ribu'],
            [8000, 'lapan ribu'],
            [9000, 'sembilan ribu'],
            [10000, 'sepuluh ribu'],
            [12345, 'dua belas ribu tiga ratus empat puluh lima'],
            [20000, 'dua puluh ribu'],
            [30000, 'tiga puluh ribu'],
            [40000, 'empat puluh ribu'],
            [50000, 'lima puluh ribu'],
            [54321, 'lima puluh empat ribu tiga ratus dua puluh satu'],
            [60000, 'enam puluh ribu'],
            [70000, 'tujuh puluh ribu'],
            [80000, 'lapan puluh ribu'],
            [90000, 'sembilan puluh ribu'],
            [100000, 'seratus ribu'],
            [123456, 'seratus dua puluh tiga ribu empat ratus lima puluh enam'],
            [200000, 'dua ratus ribu'],
            [300000, 'tiga ratus ribu'],
            [400000, 'empat ratus ribu'],
            [500000, 'lima ratus ribu'],
            [600000, 'enam ratus ribu'],
            [654321, 'enam ratus lima puluh empat ribu tiga ratus dua puluh satu'],
            [700000, 'tujuh ratus ribu'],
            [800000, 'lapan ratus ribu'],
            [900000, 'sembilan ratus ribu'],
            [1000000, 'satu juta'],
            [1000001, 'satu juta satu'],
            [1234567, 'satu juta dua ratus tiga puluh empat ribu lima ratus enam puluh tujuh'],
            [2000000, 'dua juta'],
            [3000000, 'tiga juta'],
            [4000000, 'empat juta'],
            [5000000, 'lima juta'],
            [6000000, 'enam juta'],
            [7000000, 'tujuh juta'],
            [7654321, 'tujuh juta enam ratus lima puluh empat ribu tiga ratus dua puluh satu'],
            [8000000, 'lapan juta'],
            [9000000, 'sembilan juta'],
            [1000000000, 'satu bilion'],
            [1000000001, 'satu bilion satu'],
            [-103, 'negatif seratus tiga'],
        ];
    }
}
