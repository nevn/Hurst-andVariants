<?php

//Hurst design 

function HurstPrototype()
{
	
	
	
}

/*

Estimating the Hurst exponent

The Hurst exponent is not so much calculated as it is estimated. A variety of techniques exist for estimating the Hurst exponent (H) and the process detailed here is both simple and highly data intensive.
To estimate the Hurst exponent one must regress the rescaled range on the time span of observations.
To do this, a time series of full length is divided into a number of shorter time series and the rescaled range is calculated for each of the smaller time series.
A minimum length of eight is usually chosen for the length of the smallest time series. So, for example, if a time series has 128 observations it is divided into:

    two chunks of 64 observations each
    four chunks of 32 observations each
    eight chunks of 16 observations each
    16 chunks of eight observations each

	*/
	
	
	# 2
	
	
	
	/*
	
	
Steps for estimating the Hurst exponent after breaking the time series into chunks:

For each chunk of observations, compute:

    the mean of the time series,
    a mean centered series by subtracting the mean from the series,
    the cumulative deviation of the series from the mean by summing up the mean centered values,
    the Range (R), which is the difference between the maximum value of the cumulative deviation and the minimum value of the cumulative deviation,
    the standard deviation (S) of the mean centered values, and
    the rescaled range by dividing the Range by the standard deviation.

Finally, average the rescaled range over all the chunks.

The rescaled range and chunk size follows a power law, and the Hurst exponent is given by the exponent of this power law.
When the frequency of an event varies as the power of some quantity associated with the event, it is said to follow a power law.
A wide variety of natural and manmade phenomena follow a power law.
*/

echo ' "A wide variety of natural and manmade phenomena follow a power law." ';
/*
For example, the 80/20 rule (20 percent of the population holds 80 percent of wealth), the winner-take-all phenomenon, friend connections in a social network and forest fires all follow power laws.

*/
