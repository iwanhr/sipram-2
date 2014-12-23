<?php

namespace PyramidLib\Common;

class Pagination {
    /*
     * @input $sessionName Nama Session, $rediredct boolean, $rediredctUrl string
     * @return boolean
     */

    public function generatePagination($jml = '', $perhalaman = '', $hal = '')
    {
        $dataPerhalaman = $perhalaman;
        $showhalaman = 0;
        $nohalaman = 0;

        if ($hal == '') {
            $nohalaman = 1;
        } else {
            $nohalaman = $hal;
        }

        $jumData = $jml;

        $jumhalaman = ceil($jumData / $dataPerhalaman);

        $output = '<ul class="pagination pull-right">';

        if ($nohalaman > 1) {

            $params = $_GET;
            $params['hal'] = $nohalaman - 1;

            $query = http_build_query($params);
            $output .= '<li><a class="round-icon" href="?' . $query . '" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li>';
        } else {
            $output .= '<li><a class="round-icon" href="#" data-toggle="tooltip" data-title="Previous Page">&laquo;</a></li>';
        }

        for ($halaman = 1; $halaman <= $jumhalaman; $halaman++) {
            $params = $_GET;
            $params['hal'] = $halaman;

            $query = http_build_query($params);
            if ((($halaman >= $nohalaman - 2) && ($halaman <= $nohalaman + 2)) || ($halaman == 1) || ($halaman == $jumhalaman)) {
                if (($showhalaman == 1) && ($halaman != 2)) {
                    $output .= "<li><a>...</a></li>";
                }
                if (($showhalaman != ($jumhalaman - 1)) && ($halaman == $jumhalaman)) {
                    $output .= "<li><a>...</a></li>";
                }
                if ($halaman == $nohalaman) {
                    $output .= '<li><a href="" style="text-decoration:underline">' . $halaman . '</a></li>';
                } else {
                    $output .= '<li><a href="?' . $query . '">' . $halaman . '</a></li>';
                }
                $showhalaman = $halaman;
            }
        }

        if ($nohalaman < $jumhalaman) {

            $params = $_GET;
            $params['hal'] = $nohalaman + 1;

            $query = http_build_query($params);
            $output .= '<li><a class="round-icon" href="?' . ($query) . '" data-toggle="tooltip" data-title="Next Page">&raquo;</a></li>';
        }

        $output.='</ul>';
        return $output;
    }

}
