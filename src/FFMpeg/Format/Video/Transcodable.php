<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Format\Video;

use FFMpeg\Format\VideoInterface;

/**
 * @author Romain Neutron imprec@gmail.com
 */
interface Transcodable extends VideoInterface
{

    /**
     * Returns the video codec
     *
     * @return string
     */
    public function getVideoCodec();
}
