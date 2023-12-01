#pragma once
#include <iostream>
#include "Marketer.h"

using namespace std;
class Campaign {
private:
    int date;
    int time;
    int campaignId;
    string description;
public:
    Campaign();
    Campaign(int cDate,int cTime, int cId,string cDescription);
    void editCampaign(int cDate, int cTime, int cId, string cDescription);
    void viewCampaignDetails();
    ~Campaign();
};


