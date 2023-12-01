#pragma once

#include <iostream>
#include "Order.h"

using namespace std;
class Service
{
private:
	int serviceId;
	string serviceType;
	double servicePrice;
	Order order;

public:
	Service();
	Service(int sId, string sType, double sPrice);
	void ViewServicesAndPrices();
	void placeOrder(string oName,string oType,int oPrice);
	~Service();

};

