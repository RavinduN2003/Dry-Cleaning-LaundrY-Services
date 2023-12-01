#pragma once
#include <iostream>

using namespace std;

class UnRegisteredUser
{
public:
	string Username;
	int Password;
	string name;
private:
	UnRegisteredUser();
	UnRegisteredUser(string uName, int passw, string name);
	void Register(string uName, int passw, string name);
	void browseServicesAndPrices();
	~UnRegisteredUser();
};

