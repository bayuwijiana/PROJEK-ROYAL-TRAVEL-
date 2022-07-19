

#include<stdio.h>
#include<conio.h>
#include<windows.h>
#include<time.h>

// SIZE Screen Buffer Size:
// Winth	: 166
// Height       :  45

//Window Size
// Winth	: 166
// Height       :  44
//FONT : 16




struct tm*waktu;







            ////////new REFISI 3

//____________		V	A	R	I	A	B	L	E		G	L	O	B	A	L  _________________
//____________				  									    			_________________

//______________________________________________________________________________
   ////////////////////

   char warna;
   char DataNama[100][1000];
   char DataNama2[100][1000];

   int  DataNama3[100];



   ///////////////////////
   int Jum_Data=0;
   int J=0,J2=0,J3=0;
   int JG,JG2,JG3;
   int ghg;
   char ghg2[100];
   int M=1;
   int N=0;

    char password[6];
					/* VARIABLE GLOBAL VOID CustomeBaru	*/
    char NoTelepon[12],
     NoKtp2[16],NoKtp7[16],
     NamaCustomer[100],NamaCustomer3[100],NamaCustomer4[100],NamaCustomer5[100], NamaCustomer6[100];
    int MobilAsuransi;
					/* VARIABLE GLOBAL TIPE BODY	*/

 char Z1[7],Z2[7],Z3[7],Z4[7],Z5[7],Z6[7],Z7[7],Z8[7],Z9[7],Z10[7],Z11[7],Z12[7];
 char Z21[7],Z22[7],Z23[7],Z24[7],Z25[7],Z26[7],Z27[7],Z28[7],Z29[7],Z210[7],Z211[7],Z212[7];
 char Z31[7],Z32[7],Z33[7],Z34[7],Z35[7],Z36[7],Z37[7],Z38[7],Z39[7],Z310[7],Z311[7],Z312[7];
 char Z41[7],Z42[7],Z43[7],Z44[7],Z45[7],Z46[7],Z47[7],Z48[7],Z49[7];


  int n;
  int Kl=1;
  int BATASANGKA=6;
  char TipeBodi;
  char MerekMobil[10];
  char No_KendaraanAwal[16];
  char No_KendaraanTengah[4];
  char No_KendaraanAkhir[2];

  float StokRefresh;
  char suv[10]="SUV",
  	 sedan[10]="SEDAN",
  	 hatchback[10]="HATCHBACK",
  	 truck[10]="TRUCK",
  	 van[10]="VAN";

  int tampBeliAsesoris=0;
  int UbahDataHarga=0;
 char NoAsesoris;
  char FENDER_Kerusakan1[50]="FENDER KERUSAKAN RINGAN",
    FENDER_Kerusakan2[50]="FENDER KERUSAKAN SEDANG",
    FENDER_Kerusakan3[50]="FENDER KERUSAKAN BERAT",
    PINTU_Kerusakan1[50]="PINTU KERUSAKAN RINGAN",
    PINTU_Kerusakan2[50]="PINTU KERUSAKAN SEDANG",
    PINTU_Kerusakan3[50]="PINTU KERUSAKAN BERAT",
    CAP_DEPAN_Kerusakan1[50]="CAP DEPAN KERUSAKAN RINGAN",
    CAP_DEPAN_Kerusakan2[50]="CAP DEPAN KERUSAKAN SEDANG",
    CAP_DEPAN_Kerusakan3[50]="CAP DEPAN KERUSAKAN BERAT",
    Bagasi_Kerusakan1[50]="CAP BAGASI KERUSAKAN RINGAN",
    Bagasi_Kerusakan2[50]="CAP BAGASI KERUSAKAN SEDANG",
    Bagasi_Kerusakan3[50]="CAP BAGASI KERUSAKAN BERAT";

  int tampJumlahLayarMonitor,
    tampJumlahCarOrganizer,
    tampJumlahCoverMobil,
    tampAudioMobil,
    tampChargerMobil,
    tampPhoneHolder,
    tampGpsMobil;

  float Minus_Stock;
  char KembalikeHarga;
  int  DowhileDataCustomerBaru;
  int Jenis_Reparasi;
  int tampJumlahTambahPanel=1;
  int y,tamp1=0,a1,b1,c1,d1,e1,f1,g1,h1,i1,j1,k1,l1;
  char z;
  int hargatotal=0,
  		tampJumlahFender1=0,tampJumlahFender2=0,
      tampJumlahFender3=0,
      tampJumlahPintu1=0,tampJumlahPintu2=0,tampJumlahPintu3=0,
      tampJumlahCupDepan1=0,tampJumlahCupDepan2=0,tampJumlahCupDepan3=0,
      tampJumlahCupBagasi1=0,tampJumlahCupBagasi2=0,tampJumlahCupBagasi3=0;


  char Kembali_Kemenu;
  int Tamp_Asesoris=1;
  float Stok_Pengecetan=100.0;
  float Stok_Pengentengan=100.0;
  float Stok_Pemolesan=100.0;
  float Stok_Asesoris=100.0;
  float Stok_Pengecetan_Sebelumnya;
  float Stok_Pengentengan_Sebelumnya;
  float Stok_Pemolesan_Sebelumnya;
  float Stok_Asesoris_Sebelumnya;
  char okeRefresh;
  int PilihPengecatan=0,PilihPengentengan=0,PilihPolesBodi=0,PilihAsesoris=0;
  float StokBaru=100.0;
  char InputJenisReparasi;

   int HargaPengecetanFender1=300000,
       HargaPengecetanFender2=600000,
       HargaPengecetanFender3=900000,
       HargaPengecetanPintu1=410000,
       HargaPengecetanPintu2=460000,
       HargaPengecetanPintu3=500000,
       HargaPengecetanCupdepan1=50000,
       HargaPengecetanCupdepan2=510000,
       HargaPengecetanCupdepan3=670000,
       HargaPengecetanCupBagasi1=400000,
       HargaPengecetanCupBagasi2=420000,
       HargaPengecetanCupBagasi3=5000000,

       HargaPengentenganFender1=700000,
       HargaPengentenganFender2=750000,
       HargaPengentenganFender3=770000,
       HargaPengentenganPintu1=800000,
       HargaPengentenganPintu2=850000,
       HargaPengentenganPintu3=900000,
       HargaPengentenganCupdepan1=920000,
       HargaPengentenganCupdepan2=950000,
       HargaPengentenganCupdepan3=970000,
       HargaPengentenganCupBagasi1=990000,
       HargaPengentenganCupBagasi2=195000,
       HargaPengentenganCupBagasi3=1000000,

       HargaPolesFender1=100000,
       HargaPolesFender2=11000,
       HargaPolesFender3=120000,
       HargaPolesPintu1=130000,
       HargaPolesPintu2=140000,
       HargaPolesPintu3=150000,
       HargaPolesCupdepan1=200000,
       HargaPolesCupdepan2=220000,
       HargaPolesCupdepan3=270000,
       HargaPolesCupBagasi1=200000,
       HargaPolesCupBagasi2=220000,
       HargaPolesCupBagasi3=270000,

       Harga_LAYAR_MONITOR=1000000,
       Harga_CAR_ORGANIZER=200000,
       Harga_COVER_MOBIL=200000,
	    Harga_AUDIO_MOBIL=2000000,
	    Harga_CHARGER_MOBIL=200000,
	    Harga_PHONE_HOLDER=100000,
	    Harga_GPS_MOBIL=1000000,
       Harga_KAMERA_MOBIL=3000000,
       Harga_DECAL=100000;
//___________________  			  P R O T O T Y P E			_______________________
//___________________									    		_______________________
 void PENGATURAN_TAMPILAN();
  void Batas_Reparasi();
  void KerusakanPanelDanTigkatKerusakan();
  void JenisReparasi();
//  char* fungcion(int x,int y,int batas);

  void NamaPerusahaan();
  void CustomeBaru();
  void Asesoris();
  void LOG_IN();
  void MENU();
  void InfoAplikasi();
  void harga();
  void bayar();
  void KemblaiKeMENU();
  char Kembali(char bm);
  void PengecekanAkanSimpan();
  void KembaliMenuHarga();
  char cekTambahPanel(char CekTambahPanel);
  void HargaJasaPengecetan ();
  void HargaJasaPengentengan ();
  void HargaJasaPoles ();
  void HargaJasaAsesoris ();
  void DAFTAR_HARGA();
  void STOCK_BARANG ();
  void STOCK_KEMBALI ();
  void LOADING2();
  void MenuUbahHarga();
  void  UbahHargaAsesoris() ;
  void  UbahHargaPoles ();
  void  UbahHargaPengentengan();
  void UbahHargaPengecetan();
  void ubah_stok();
  void  Pengenolan_Setelah_Pembayaran();
  void Peringatan_Stok_Habis();
   char* valHarga(int x,int y,int batas);
   void DATA_CUSTOMER();
   void NamCustomer2();
   char* valBATAS(int x,int y,int batas);

   void Password2();
   void NoKendaraan1();
   void NoKendaraan2();
   void NoKTP2();
   void NamCustomer3();
   void NamCustomer4();
   void NamCustomer6();
   void NamCustomer5();
   void BatasData();
   void NoKTP7();
   void logo();

/*__________________   V O I D  B I N G K A I  U T A M A   _____________________

  __________________													  _____________________*/
void BingkaiUtama(){

                  if(warna=='1'){
                   clrscr();
                       system("color f0");
                  }else if(warna=='2'){
                      clrscr();
                       system("color 0B");
                  }else{
                     clrscr();
                        system("color 9f");
                  }

	 for(int lebar=2;lebar<=20;lebar++ ){
     	  for(int panjang=3;panjang<=60;panjang++ ){
               gotoxy(3,lebar);textbackground(7);cprintf("  ");

            gotoxy(panjang,1);textbackground(7);cprintf(" ");
            }
    }

  	 for(int lebar=14;lebar<35;lebar++ ){
     	  for(int panjang=78;panjang<135;panjang++ ){
               gotoxy(135,lebar);textbackground(3);cprintf("  ");

            gotoxy(panjang,34);textbackground(3);cprintf(" ");
            }
    }
   textbackground(7);
   Sleep(90);textcolor(4);gotoxy(85,33);   cprintf("%c",254);
   Sleep(90);textcolor(6);gotoxy(95,33);   cprintf("%c",254);
   Sleep(100);textcolor(9);gotoxy(105,33);   cprintf("%c",254);
   Sleep(110);textcolor(10);gotoxy(115,33);  cprintf("%c",254);
   Sleep(102);textcolor(12);gotoxy(125,33); cprintf("%c",254);



}



/*______________________    V O I D  L O G  I N   ______________________________
  ______________________								  ______________________________*/
void LOG_IN(){

	do{
       gotoxy(91,24);printf("_______________________ ");
       gotoxy(80,23);printf("PASSWORD  :");
       Password2();

	       if(strcmp(password,"123456")==0){
   	        clrscr();
              LOADING2();

   }

   }while(strcmp(password,"123456")!=0);
}
/*_____________________
____   V O I D  M E N U   _______________________________
  _________________________	         			 _______________________________*/

void MENU(){ 

  clrscr();
BingkaiUtama();
NamaPerusahaan();
  BatasData();
  char InputanMenu;

   do{

      gotoxy(20,26);printf("TEKAN 0 untuk kembali Keluar  ");
      gotoxy(10,3);printf("MENU UTAMA");
      gotoxy(10,5);printf("NO.1 CUSTOMER BARU");gotoxy(30,5);printf("NO.6 PENGATURAN TAMPILAN");
      gotoxy(10,7);printf("NO.2 DAFTAR HARGA ");
      gotoxy(10,9);printf("NO.3 INFO APLIKASI");
      gotoxy(10,11);printf("NO.4 STOK BARANG ");
		gotoxy(10,13);printf("NO.5 DATA CUSTOMER ");

      gotoxy(10,15);printf("Masukan NO.Pilihan :");gotoxy(30,15);InputanMenu=getche();

	        if(InputanMenu=='3'||InputanMenu=='6'||InputanMenu=='1'||InputanMenu=='2'||InputanMenu=='0'||InputanMenu=='4'||InputanMenu=='5'){
   	        if(InputanMenu=='1'){
      	         clrscr();

         	      CustomeBaru();
              }else if(InputanMenu=='2'){
                  clrscr();
                  DAFTAR_HARGA();
              }else if(InputanMenu=='3'){
                  clrscr();
                  InfoAplikasi();
					}else if(InputanMenu=='4'){
                  clrscr();
                  STOCK_BARANG ();
					}else if(InputanMenu=='5'){
                  clrscr();
                  DATA_CUSTOMER();
              }else if(InputanMenu=='6'){
                  clrscr();
                  PENGATURAN_TAMPILAN();
              }else{
                  exit(0);
              }
           }else{
          	    gotoxy(10,20);Sleep(100);printf("INPUTAN INFALID !!!");
            		for(int y=1;y<=2;y++){
              			gotoxy(32,20);printf("Pilih Nomor...");
                     gotoxy(32,20);Sleep(300);printf("                   ");
                      gotoxy(30,15);printf("  ");
                      gotoxy(10,20);;printf("                             ");

                       Sleep(300);

            		}

           }
   }while(InputanMenu!='3'&&InputanMenu!='1'&&InputanMenu!='6'&&InputanMenu!='2'&&InputanMenu!='0'&&InputanMenu!='4'&&InputanMenu!='5');
}
/*______________________  V O I D  P E N G E C E K A N  ________________________
  _________________________	         			 _______________________________*/
void PengecekanAkanSimpan(){
  char AkanSimpan;

    do{
       gotoxy(1,28);printf("													 ");
       gotoxy(27,27);printf("Simpan Data  y/t?");gotoxy(46,27);AkanSimpan=getche();

          if(AkanSimpan=='y'||AkanSimpan=='Y'){
              gotoxy(46,27);printf("Data Disimpan ");
              Sleep(200);
              clrscr();
              JenisReparasi();
          }else if(AkanSimpan=='t'||AkanSimpan=='T'){
              gotoxy(46,27);printf("Data tidak disimpan .");
              Sleep(200);
              clrscr();
              J=JG;
              MENU();
          }else{
          		DowhileDataCustomerBaru=1;
               Sleep(200);
               gotoxy(46,27);printf("                     ");
               gotoxy(46,27);printf("Inputan tidak valid ");
               Sleep(200);
               gotoxy(46,27);printf("                        ");

          }

    }while(AkanSimpan!='y'&& AkanSimpan!='t'&&AkanSimpan!='Y'&&AkanSimpan!='T');
}


/*________________ F U N G T I O N   T A M B A H  P A N E L ____________________
  ________________								  	         		____________________*/

char cekTambahPanel(char CekTambahPanel){
         if( CekTambahPanel=='T'|| CekTambahPanel=='t'){
       		z='k';
            return 'T';
         }else if( CekTambahPanel=='Y'||CekTambahPanel=='y'){
            z='j' ;
            return 'Y';
         }
}

/*__________________ V O I D   C U S T O M E R   B A  R U ______________________
  __________________  							                ______________________*/
void CustomeBaru(){
BingkaiUtama();
NamaPerusahaan();
	char Asuransi;

	do{

      gotoxy(11,11);printf("DATA CUSTOMERS	  ");

      gotoxy(11,12);printf("TANGGAL %d/ %d/ %d",waktu->tm_mday,waktu->tm_mon+1,1900+waktu->tm_year);

      gotoxy(10,14);printf("*NAMA CUSTOMER :");

      gotoxy(11,16);printf("Profil instagram   :   ");

      gotoxy(11,18);printf("DATA KENDARAAN	  ");
      gotoxy(10,20);printf("*NAMA KENDARAAN:");
      gotoxy(10,22);printf("*No.KENDARRAAN :");

      NamCustomer2();

      NamCustomer6();

      NamCustomer5();

      NoKTP7();
      NoKTP2();
      NamCustomer4();

      gotoxy(50,11);printf(" T I P E   B O D I ");
      gotoxy(50,13);printf("NO.1 %s",suv);
      gotoxy(50,14);printf("NO.2 %s",sedan);
      gotoxy(50,15);printf("NO.3 %s",hatchback);
      gotoxy(50,16);printf("NO.4 %s",truck);
      gotoxy(50,17);printf("NO.5 %s",van);

      	do{
      		gotoxy(40,21); printf("PILIH TIPE BODI :");
         	gotoxy(58,21); TipeBodi=getche();

     	  			if( TipeBodi=='1'){
            		 	gotoxy(58,21);printf("%s",suv);
        			}else if( TipeBodi=='2'){
            		 	gotoxy(58,21);printf("%s",sedan);
        			}else if( TipeBodi=='3'){
                     gotoxy(58,21);printf("%s",hatchback);
        			}else if( TipeBodi=='4'){
            		 	gotoxy(58,21);printf("%s",truck);
        			}else if( TipeBodi=='5'){
            		 	gotoxy(58,21);printf("%s",van);

        			}else{
                 gotoxy(58,21);printf("INPUTAN SALAH INFALID !!");
             		Sleep(350);
             		gotoxy(58,21);printf("                        ");
             		gotoxy(58,21);printf("   ");
        			}
         		Sleep(200);
   	}while(TipeBodi=='1'&&TipeBodi=='2'&&TipeBodi=='3'&&TipeBodi=='4'&&TipeBodi=='5');



   		do{
      		gotoxy(11,25); printf("MOBIL DENGAN ASURANSI  y/t :");
         	gotoxy(41,25); Asuransi=getche();

     	  			if( Asuransi=='y'||Asuransi=='Y'){
             		 gotoxy(41,25);printf("MOBIL ASURANSI"); MobilAsuransi=1;
        			}else if(Asuransi=='t'||Asuransi=='T'){
            		 gotoxy(41,25);printf("BUKAN ASURANSI");MobilAsuransi=0;
        			}else{

             		gotoxy(41,25);printf("INPUTAN  INFALID !!");
             		Sleep(230);
             		gotoxy(41,25);printf("                        ");

        			}
         		Sleep(200);
   	}while(Asuransi!='y'&&Asuransi!='t'&&Asuransi!='T'&&Asuransi!='Y');

      PengecekanAkanSimpan();

   }while(DowhileDataCustomerBaru==1);
}

//_________________   V O I D	 J E N I S	R E P A R A S I  _____________________

//_________________													  _____________________

void JenisReparasi(){
BingkaiUtama();
NamaPerusahaan();
   gotoxy(20,16);printf("T E K A N  0  untuk kembali Keluar  ");
   gotoxy(20,15);printf("T E K A N  8  untuk kembali ke MENU ");

 	do{
		gotoxy(11,5);printf("JENIS REPARASI");
		gotoxy(11,6);printf("1.PENGECATAN");
		gotoxy(11,7);printf("2.PENGENTENGAN");
		gotoxy(11,8);printf("3.POLES BODI");
		gotoxy(11,9);printf("4.ASESORIS");
		gotoxy(11,10);printf("NO.JENIS PERBAIKAN :");
      gotoxy(22,17);InputJenisReparasi=getche();

      	if(InputJenisReparasi=='1'|| InputJenisReparasi=='2'|| InputJenisReparasi=='3'|| InputJenisReparasi=='4'|| InputJenisReparasi=='0'|| InputJenisReparasi=='8'){

              if (InputJenisReparasi=='0'){
              		exit(0);
              }
         	  else if (InputJenisReparasi=='8'){
              		clrscr();
                  Sleep(200);
                  MENU();
              }
              else if (InputJenisReparasi=='1'){
                  PilihPengecatan++;
         	 		Jenis_Reparasi=1;
                clrscr();
                  Sleep(200);
             		KerusakanPanelDanTigkatKerusakan();
         		}
					else if (InputJenisReparasi=='2'){
                  PilihPengentengan++;
         			Jenis_Reparasi=2;
                  clrscr();
         			Sleep(200);
         			KerusakanPanelDanTigkatKerusakan();
   				}
					else if (InputJenisReparasi=='3'){
               	PilihPolesBodi++;
   					Jenis_Reparasi=3;
                  clrscr();
         			Sleep(200);
         			KerusakanPanelDanTigkatKerusakan();
   				}
					else{
                  PilihAsesoris++;
  			 			Jenis_Reparasi=4;
   					clrscr();
         			Sleep(200);
         			Asesoris();
      			}
   		}else{
      			gotoxy(22,17);printf ("INPUTAN INVALID !!! Masukan NO.Jenis Perbaikan .");
               Sleep(300);

               clrscr();
               JenisReparasi();
         }

   }while(InputJenisReparasi!='1' &&InputJenisReparasi!='2' &&InputJenisReparasi!='3' &&InputJenisReparasi!='4' &&InputJenisReparasi!='0' &&InputJenisReparasi!='8') ;
}
/*_______________ V O I D   K E R U S A K A N  P A N E L _______________________

  _________________ D A N_T I NG K A T_K E R U S A K A N _______________________*/

void KerusakanPanelDanTigkatKerusakan(){
 int JK=0;
 int Batas_Dowhile_Tambah_Panel=0;
 int Batas_Dowhile_Sudah_Yakin;
 int bros;
 char NoPanelReparasi;
 char	NoTingkatKerusakan;
 char TambahPanel;
 char YakinBenar;
  BingkaiUtama();
NamaPerusahaan();
     gotoxy(11,39);printf("Untuk Kembali KeHalaman Sebelumnya >> Tekan 8");
     gotoxy(11,5);printf("PANEL REPARASI ");
     gotoxy(11,7);printf("1.FENDER");
     gotoxy(11,8);printf("2.PINTU");
     gotoxy(11,9);printf("3.CAP DEPAN");
     gotoxy(11,10);printf("4.CAP BAGASI");
     gotoxy(31,5);printf("TINGKAT KERUSAKAN");
     gotoxy(31,8);printf("NO.1 KERUSAKAN RINGAN");
     gotoxy(31,9);printf("NO.2 KERUSAKAN SEDANG");
     gotoxy(31,10);printf("NO.3 KERUSAKAN BERAT");

       do{
    		 gotoxy(11,12);printf("PILIH NO.PANEL REPARASI :");
          Peringatan_Stok_Habis();
          gotoxy(37,12);NoPanelReparasi=getche();

    	  		if(NoPanelReparasi!='1' &&NoPanelReparasi!='2' &&NoPanelReparasi!='3' &&NoPanelReparasi!='4' && NoPanelReparasi!='8'){
      	   	Sleep(300);
               gotoxy(37,12);printf(" Inputan tidak valid ..");
            	Sleep(300);
               gotoxy(37,12);printf("    ");
               gotoxy(37,12);printf("    								");
        		}
 		 }while(NoPanelReparasi!='1' &&NoPanelReparasi!='2' &&NoPanelReparasi!='3' &&NoPanelReparasi!='4' &&NoPanelReparasi!='8');

       		if(NoPanelReparasi=='8'){
           		Sleep(200);
           		clrscr();
               STOCK_KEMBALI ();
               JenisReparasi();
         	}
            do{
               gotoxy(11,14);printf("NO.Tingkat Kerusakan : ");
               gotoxy(35,14);NoTingkatKerusakan=getche();
               Peringatan_Stok_Habis();

               		if(NoTingkatKerusakan!='1' &&NoTingkatKerusakan!='2' &&NoTingkatKerusakan!='3' &&NoTingkatKerusakan!='8'){
                  		Sleep(300);
                        gotoxy(35,14);printf("Inputan tidak valid ..");
                  		Sleep(300);
                        gotoxy(35,14);printf("    								");
                     }
            }while(NoTingkatKerusakan!='1' &&NoTingkatKerusakan!='2' &&NoTingkatKerusakan!='3' &&NoTingkatKerusakan!='8');
               		if(NoTingkatKerusakan=='8'){
                         STOCK_KEMBALI ();
                         Sleep(300);
                         clrscr();
                         JenisReparasi();
                     }

//______________________________________________________________________________________________________________________________________________________________________
             if(Jenis_Reparasi==1){
               		if(NoPanelReparasi== '1'){
                         if(NoTingkatKerusakan =='1' ){tampJumlahFender1++; gotoxy(11,15);printf("FENDER KERUSAKAN RINGAN"); a1=1; }
                         if(NoTingkatKerusakan =='2' ){tampJumlahFender2++;gotoxy(11,15);printf("FENDER KERUSAKAN SEDANG"); b1=2; }
                         if(NoTingkatKerusakan =='3' ){tampJumlahFender3++;gotoxy(11,15);printf("FENDER KERUSAKAN BERAT");  c1=3; }
         				 }
							 if(NoPanelReparasi== '2'){
			        		  	 if(NoTingkatKerusakan =='1' ){tampJumlahPintu1++; gotoxy(11,15);printf("PINTU KERUSAKAN RINGAN"); d1=4; }
         					 if(NoTingkatKerusakan =='2' ){tampJumlahPintu2++;  gotoxy(11,15);printf("PINTU KERUSAKAN SEDANG"); e1=5;}
            				 if(NoTingkatKerusakan =='3' ){tampJumlahPintu3++;  gotoxy(11,15);printf("PINTU KERUSAKAN BERAT");  f1=6;}
				          }
							 if(NoPanelReparasi== '3'){
               			 if(NoTingkatKerusakan =='1' ){tampJumlahCupDepan1++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN RINGAN"); g1=7;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupDepan2++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN SEDANG"); h1=8;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupDepan3++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN BERAT");  i1=9;}
                      }
							 if(NoPanelReparasi== '4'){
         					 if(NoTingkatKerusakan =='1' ){tampJumlahCupBagasi1++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN RINGAN"); j1=10;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupBagasi2++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN SEDANG"); k1=11;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupBagasi3++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN BERAT");  l1=12;}
                      }
             }
//______________________________________________________________________________________________________________________________________________________________________
             else if(Jenis_Reparasi==2){
               		if(NoPanelReparasi== '1'){
                         if(NoTingkatKerusakan =='1' ){tampJumlahFender1++;gotoxy(11,15);printf("FENDER KERUSAKAN RINGAN"); a1=1; }
                         if(NoTingkatKerusakan =='2' ){tampJumlahFender2++;gotoxy(11,15);printf("FENDER KERUSAKAN SEDANG"); b1=2;}
                         if(NoTingkatKerusakan =='3' ){tampJumlahFender3++;gotoxy(11,15);printf("FENDER KERUSAKAN BERAT");  c1=3;}
         				 }
							 if(NoPanelReparasi== '2'){
			        		  	 if(NoTingkatKerusakan =='1' ){tampJumlahPintu1++; gotoxy(11,15);printf("PINTU KERUSAKAN RINGAN"); d1=4;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahPintu2++;  gotoxy(11,15);printf("PINTU KERUSAKAN SEDANG"); e1=5;}
            				 if(NoTingkatKerusakan =='3' ){tampJumlahPintu3++;  gotoxy(11,15);printf("PINTU KERUSAKAN BERAT");  f1=6;}
				          }
							 if(NoPanelReparasi== '3'){
               			 if(NoTingkatKerusakan =='1' ){tampJumlahCupDepan1++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN RINGAN"); g1=7;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupDepan2++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN SEDANG"); h1=8;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupDepan3++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN BERAT");  i1=9;}
                      }
							 if(NoPanelReparasi== '4'){
         					 if(NoTingkatKerusakan =='1' ){tampJumlahCupBagasi1++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN RINGAN"); j1=10;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupBagasi2++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN SEDANG"); k1=11;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupBagasi3++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN BERAT");  l1=12;}
                      }
             }
//______________________________________________________________________________________________________________________________________________________________________
             else if(Jenis_Reparasi==3){
               		if(NoPanelReparasi== '1'){
                         if(NoTingkatKerusakan =='1' ){tampJumlahFender1++; gotoxy(11,15);printf("FENDER KERUSAKAN RINGAN"); a1=1;}
                         if(NoTingkatKerusakan =='2' ){tampJumlahFender2++;gotoxy(11,15);printf("FENDER KERUSAKAN SEDANG"); b1=2;}
                         if(NoTingkatKerusakan =='3' ){tampJumlahFender3++;gotoxy(11,15);printf("FENDER KERUSAKAN BERAT");  c1=3;}
         				 }
							 if(NoPanelReparasi== '2'){
			        		  	 if(NoTingkatKerusakan =='1' ){tampJumlahPintu1++; gotoxy(11,15);printf("PINTU KERUSAKAN RINGAN"); d1=4;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahPintu2++;  gotoxy(11,15);printf("PINTU KERUSAKAN SEDANG"); e1=5;}
            				 if(NoTingkatKerusakan =='3' ){tampJumlahPintu3++;  gotoxy(11,15);printf("PINTU KERUSAKAN BERAT");  f1=6;}
				          }
							 if(NoPanelReparasi== '3'){
               			 if(NoTingkatKerusakan =='1' ){tampJumlahCupDepan1++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN RINGAN"); g1=7;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupDepan2++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN SEDANG"); h1=8;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupDepan3++; gotoxy(11,15);printf("CAP DEPAN KERUSAKAN BERAT");  i1=9;}
                      }
							 if(NoPanelReparasi== '4'){
         					 if(NoTingkatKerusakan =='1' ){tampJumlahCupBagasi1++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN RINGAN"); j1=10;}
         					 if(NoTingkatKerusakan =='2' ){tampJumlahCupBagasi2++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN SEDANG"); k1=11;}
  	      					 if(NoTingkatKerusakan =='3' ){tampJumlahCupBagasi3++; gotoxy(11,15);printf("CAP BAGASI KERUSAKAN BERAT");  l1=12;}
                      }
             }
//______________________________________________________________________________________________________________________________________________________________________

             else if(Jenis_Reparasi==4){
               		if(NoAsesoris=='1' ){
                        gotoxy(11,15);printf(" LAYAR MONITOR");
                     }
                     if (NoAsesoris=='2' ){
                        gotoxy(11,15);printf(" CAR ORGANIZER");
                     }if(NoAsesoris=='3'){
                        gotoxy(11,15);printf(" COVER MOBIL");
                     }if(NoAsesoris=='4' ){
                        gotoxy(11,15);printf(" AUDIO MOBIL");
                     }if (NoAsesoris=='5' ){
                        gotoxy(11,15);printf(" CHARGER MOBIL");
                     }if (NoAsesoris=='6' ){
                        gotoxy(11,15);printf(" PHONE HOLDER");
                     }if(NoAsesoris=='7'){
                        gotoxy(11,15);printf(" GPS MOBIL");
                     }
             }


//__________________________________________________________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________________________________________________________

                         tamp1++;
                         harga();
                  do{
						   gotoxy(11,27);printf("TAMBAH PANEL Y/T :	");
                     gotoxy(42,27);TambahPanel=getche();

                     		  if(TambahPanel == '8'){

                                STOCK_KEMBALI ();
 									   	Sleep(300);
                                 clrscr();
                                 JenisReparasi();


                  			  }else if(TambahPanel== 't'|| TambahPanel== 'T'){
                                Batas_Dowhile_Tambah_Panel=1;

              								  do{
                                         clrscr();
                                          BingkaiUtama();
                                         gotoxy(11,29);printf("Apa anda yakin data  sudah benar? Y/T :  ");
                                         gotoxy(59,29);YakinBenar=getche();

                      								  if(YakinBenar=='y'||YakinBenar=='Y'){
                                                  Batas_Dowhile_Sudah_Yakin=1;
                                                  clrscr();

                                             	  bayar();
															  }else if(YakinBenar=='T'||YakinBenar=='t'){
                                             	  Batas_Dowhile_Sudah_Yakin=1;

                          								  gotoxy(11,30);printf("anda belum yakin");
                                                  Sleep(400);
                                             	  clrscr();

                                                  Pengenolan_Setelah_Pembayaran();
                                                  KerusakanPanelDanTigkatKerusakan();
                      								  }else{
                                             	  Batas_Dowhile_Sudah_Yakin=2;
                           							  gotoxy(59,29);printf("inputan tidak valid ..");
                           							  gotoxy(59,29);Sleep(300);
                                                  gotoxy(59,29);printf("                        ");
                                                  Sleep(200);
                                          	  }
                                 	  }while(Batas_Dowhile_Sudah_Yakin!=1);

                             }else if(TambahPanel== 'Y'||TambahPanel== 'y'){
                                  tampJumlahTambahPanel=tampJumlahTambahPanel+1;
       	  	 					       gotoxy(11,31);printf("JUMLAH PANEL\%d",tampJumlahTambahPanel);
                                  Batas_Reparasi();
                                  Sleep(200);
                                  clrscr();
                                  KerusakanPanelDanTigkatKerusakan();
                                  Batas_Dowhile_Tambah_Panel=1;
                                  JK=2;
									  }else{
                                  Batas_Dowhile_Tambah_Panel=2;
                                  Sleep(200);
                                  gotoxy(42,27);printf("			");
                                  gotoxy(42,27);printf("inputan tidak valid ..");Sleep(300);

                                  gotoxy(42,27);printf("									   ");
                             }
                             Sleep(200);
	               }while(Batas_Dowhile_Tambah_Panel==2);
}
//_____________________________________________________________________________________________
//_____________________________________________________________________________________________
//_____________________________________________________________________________________________

/*______________________ V O I D    A S E S O R I S ____________________________
  ______________________						          ____________________________*/



void Asesoris(){

BingkaiUtama();
NamaPerusahaan();
   int BatasDoWhileAsesoris;

   do{
      gotoxy(11,20);printf("Untuk Kembali ke halaman sebelumnya >> Tekan 0  ");
	   gotoxy(11,5);printf("ASESORIS MOBIL");
      gotoxy(11,6);printf("NO.1 LAYAR MONITOR ");
      gotoxy(11,7);printf("NO.2 CAR ORGANIZER");
      gotoxy(11,8);printf("NO.3 COVER MOBIL");
	   gotoxy(11,9);printf("NO.4 AUDIO MOBIL");
	   gotoxy(11,10);printf("NO.5 CHARGER MOBIL");
	   gotoxy(11,11);printf("NO.6 PHONE HOLDER");
	   gotoxy(11,12);printf("NO.7 GPS MOBIL");
      gotoxy(11,14);printf("Masukan NO.Pilihan :");
      gotoxy(33,14);NoAsesoris=getche();

			if(NoAsesoris=='0' || NoAsesoris=='1' || NoAsesoris=='2' || NoAsesoris=='3' || NoAsesoris=='4' || NoAsesoris=='5' || NoAsesoris=='6' || NoAsesoris=='7' ){
                 tampBeliAsesoris=1;
                     if(NoAsesoris=='0')	{clrscr();Sleep(300);Pengenolan_Setelah_Pembayaran();MENU();}
         				if(NoAsesoris=='1')	{a1=1;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampJumlahLayarMonitor=tampJumlahLayarMonitor+=1;}
					  		if(NoAsesoris=='2')	{b1=2;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampJumlahCarOrganizer=tampJumlahCarOrganizer+=1;}
	   			  	   if(NoAsesoris=='3')	{c1=3;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampJumlahCoverMobil=tampJumlahCoverMobil+=1;}
                     if(NoAsesoris=='4')	{d1=4;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampAudioMobil=tampAudioMobil+=1;}
                     if(NoAsesoris=='5')	{e1=5;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampChargerMobil=tampChargerMobil+=1;}
                     if(NoAsesoris=='6')	{f1=6;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampPhoneHolder=tampPhoneHolder+=1;}
                     if(NoAsesoris=='7')	{g1=7;gotoxy(36,14);printf("%d Asesoris",Tamp_Asesoris);tampGpsMobil=tampGpsMobil+=1;}
			}else{
               	   Sleep(1000);
                     gotoxy(33,14);printf("INPUTAN INFALID !!!");
                     	for(int y=1;y<=2;y++){
                     		gotoxy(45,14);printf("Pilih Nomor...");
                        	gotoxy(45,14);
                        	Sleep(200);printf("                   ");
                        	Sleep(200);
                        	clrscr();
                        	Asesoris();
                    	   }
         }
         harga();
          do{
             gotoxy(11,15);printf("TAMBAH ASESORIS Y/T :	");gotoxy(33,15);z=getche();
                if(z=='0'){
                  clrscr();
                   Pengenolan_Setelah_Pembayaran();
                  JenisReparasi();
                }else{
             				cekTambahPanel(z);
                      				if(z=='j'){
                         				Tamp_Asesoris =Tamp_Asesoris+1;
                         				BatasDoWhileAsesoris=6;
                         				clrscr();
                         				Asesoris();

                      				}else if(z=='k'){
                         				clrscr();
                         				BatasDoWhileAsesoris=6;
                         				printf("oke aksesoris dipasangkan");
                         				bayar();
                      				}else{
                         				Sleep(300);gotoxy(33,15);printf("      ");
                         				gotoxy(33,15);printf("inputan tidak valid ..");
                         				Sleep(300);gotoxy(33,15);printf("                       ");
                         				BatasDoWhileAsesoris=7;
                     				 }
                }
          }while(BatasDoWhileAsesoris!=6);

   } while(z=='j');
}
/*___________________ V O I D   I N F O  A P L I K A S I _______________________
  ___________________							               _______________________*/
void InfoAplikasi(){
                     BingkaiUtama();    NamaPerusahaan();
	gotoxy(11,3);printf("INFO APLIKASI");
	gotoxy(11,4);printf("ESTIMASI BODI OTOMOTIF");
	gotoxy(11,5);printf("Aplikasi ESTIMASI BODI OTOMOTIF  dibuat khusus untuk Industri ");
	gotoxy(11,6);printf("Berdikari Auto Body Repairi BANYUMAS .");
	gotoxy(11,7);printf("Difungsikan Untuk : ");
	gotoxy(11,8);printf("menghitung pelayanan sekaligus ");
	gotoxy(11,9);printf("Menyimpan dan merekap data Customer secara terstruktur dan fleksibel .");
	gotoxy(11,10);printf("Penggunaan Aplikasi :");
	gotoxy(11,11);printf(" Aplikasi ini hanya diperkenankan untuk digunakan oleh");
	gotoxy(11,12);printf("Bagian Estimasi saja atau  orang yang dipercaya Pemilik Perusahaan.");
	gotoxy(11,13);printf("Bagian Estimasi Bertanggung jawab penuh apabila terjadi pengurangan harga pada aplikasi . ");
	gotoxy(11,14);printf("@BERDIKARI BANYUMAS");
	gotoxy(11,15);printf("Pemilik Perusahaan");
	gotoxy(11,19);printf("KUKUH HERMAWAN ");
   	KemblaiKeMENU();
}
/*_______________________ V	O	I	D    H  A	R	G	A ________________________
  _______________________  					              ________________________*/
void harga(){
	if(Jenis_Reparasi==1){
		if (a1==1){hargatotal=hargatotal+HargaPengecetanFender1;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (b1==2){hargatotal=hargatotal+HargaPengecetanFender2;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (c1==3){hargatotal=hargatotal+HargaPengecetanFender3;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (d1==4){hargatotal=hargatotal+HargaPengecetanPintu1;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (e1==5){hargatotal=hargatotal+HargaPengecetanPintu2;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (f1==6){hargatotal=hargatotal+HargaPengecetanPintu3;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (g1==7){hargatotal=hargatotal+HargaPengecetanCupdepan1;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (h1==8){hargatotal=hargatotal+HargaPengecetanCupdepan2;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (i1==9){hargatotal=hargatotal+HargaPengecetanCupdepan3;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (j1==10){hargatotal=hargatotal+HargaPengecetanCupBagasi1;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (k1==11){hargatotal=hargatotal+HargaPengecetanCupBagasi2;Stok_Pengecetan=Stok_Pengecetan-0.5;	}
		if (l1==12){hargatotal=hargatotal+HargaPengecetanCupBagasi3;Stok_Pengecetan=Stok_Pengecetan-0.5;	}

	}else if(Jenis_Reparasi==2){
		if (a1==1){hargatotal=hargatotal+HargaPengentenganFender1;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (b1==2){hargatotal=hargatotal+HargaPengentenganFender2;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (c1==3){hargatotal=hargatotal+HargaPengentenganFender3;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (d1==4){hargatotal=hargatotal+HargaPengentenganPintu1;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (e1==5){hargatotal=hargatotal+HargaPengentenganPintu2;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (f1==6){hargatotal=hargatotal+HargaPengentenganPintu3;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (g1==7){hargatotal=hargatotal+HargaPengentenganCupdepan1;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (h1==8){hargatotal=hargatotal+HargaPengentenganCupdepan2;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (i1==9){hargatotal=hargatotal+HargaPengentenganCupdepan3;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (j1==10){hargatotal=hargatotal+HargaPengentenganCupBagasi1;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (k1==11){hargatotal=hargatotal+HargaPengentenganCupBagasi2;Stok_Pengentengan=Stok_Pengentengan-0.5;	}
		if (l1==12){hargatotal=hargatotal+HargaPengentenganCupBagasi3;Stok_Pengentengan=Stok_Pengentengan-0.5;	}

	}else if(Jenis_Reparasi==3){
		if (a1==1){hargatotal=hargatotal+HargaPolesFender1;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (b1==2){hargatotal=hargatotal+HargaPolesFender2;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (c1==3){hargatotal=hargatotal+HargaPolesFender3;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (d1==4){hargatotal=hargatotal+HargaPolesPintu1;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (e1==5){hargatotal=hargatotal+HargaPolesPintu2;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (f1==6){hargatotal=hargatotal+HargaPolesPintu3;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (g1==7){hargatotal=hargatotal+HargaPolesCupdepan1;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (h1==8){hargatotal=hargatotal+HargaPolesCupdepan2;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (i1==9){hargatotal=hargatotal+HargaPolesCupdepan3;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (j1==10){hargatotal=hargatotal+HargaPolesCupBagasi1;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (k1==11){hargatotal=hargatotal+HargaPolesCupBagasi2;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
		if (l1==12){hargatotal=hargatotal+HargaPolesCupBagasi3;Stok_Pemolesan=Stok_Pemolesan-0.5;	}
	}else if(Jenis_Reparasi==4){
   PilihAsesoris=1;
      if (a1==1){hargatotal=hargatotal+Harga_LAYAR_MONITOR;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (b1==2){hargatotal=hargatotal+Harga_CAR_ORGANIZER;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (c1==3){hargatotal=hargatotal+Harga_COVER_MOBIL;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (d1==4){hargatotal=hargatotal+Harga_AUDIO_MOBIL;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (e1==5){hargatotal=hargatotal+Harga_CHARGER_MOBIL;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (f1==6){hargatotal=hargatotal+Harga_PHONE_HOLDER;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (g1==7){hargatotal=hargatotal+Harga_GPS_MOBIL;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (h1==8){hargatotal=hargatotal+Harga_KAMERA_MOBIL;Stok_Asesoris=Stok_Asesoris-0.5;	}
		if (i1==9){hargatotal=hargatotal+Harga_DECAL;Stok_Asesoris=Stok_Asesoris-0.5;	}
   }
}

//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________
//__________________________________________________________________________________________________________________________________

/*_________________ V O I D   K E M B A L I  K E M E N U  2 ____________________
  _________________       					                     ____________________*/
void KemblaiKeMENU2(){
	do{
  		gotoxy(20,40);printf("TEKAN 9 Untuk ke Menu Reparasi  ");
  		gotoxy(20,41);printf("TEKAN 0 untuk kembali Keluar  ");
  		gotoxy(20,42);printf("TEKAN 8 untuk kembali ke MENU UTAMA");
      gotoxy(40,43);Kembali_Kemenu=getche();

             if(Kembali_Kemenu=='8'){
                  Pengenolan_Setelah_Pembayaran();
                  tampJumlahTambahPanel=1;
             		Sleep(500);
                  clrscr();
                  Sleep(300);
                  MENU();
             }else if(Kembali_Kemenu=='9'){
              		clrscr();
                  Sleep(300);
                  printf(" Data Disimpan ");
                  Sleep(800);
                  clrscr();
                  JenisReparasi();
             }else if(Kembali_Kemenu=='0'){
                  clrscr();
                  Sleep(500);
                  printf(" Data Disimpan ");
                  Sleep(800);
                  clrscr();
                  exit(0);
             }else{
             		gotoxy(40,43);printf("                     ");
                  gotoxy(40,43);printf("inputan tidak valid");
                  Sleep(300);
                  gotoxy(40,43);printf("                     ");
             }

	}while(Kembali_Kemenu!='8');
}
/*__________________ V O I D   K E M B A L I  K E M E N U ______________________
  __________________       					                ______________________*/

void KemblaiKeMENU(){

	do{
		gotoxy(20,40);printf("TEKAN 0 untuk kembali Keluar  ");
		gotoxy(20,41);printf("TEKAN 8 untuk kembali ke MENU UTAMA");
      gotoxy(20,42);Kembali_Kemenu=getche();

             if(Kembali_Kemenu=='8'){
                Sleep(500);
                clrscr();
             	 Sleep(300);
             	 MENU();
             }else if(Kembali_Kemenu=='0'){
                Sleep(300);
                exit(0);
             }else{
                gotoxy(20,42);printf("                     ");
                gotoxy(20,42);printf("inputan tidak valid");
                Sleep(300);
                gotoxy(20,42);printf("                     ");
             }

	}while(Kembali_Kemenu!='8');
}
 //_____________________________________________________________________________

/*__________________________ V O I D  B A Y A R ________________________________
  ___________________________        				________________________________*/
void bayar(){
 int R=11;
      clrscr();
      BingkaiUtama();
     NamaPerusahaan();
      gotoxy(11,6);printf("TANGGAL %d/ %d/ %d",waktu->tm_mday,waktu->tm_mon+1,1900+waktu->tm_year);
      gotoxy(11,7);printf("NAMA CUSTOMER  : %s",NamaCustomer);gotoxy(50,7);printf("* akan dicetak)");
      gotoxy(11,8);printf("NO KENDARAAN  : %s %s %s", NamaCustomer3,NoKtp2,NamaCustomer4);
      Jum_Data=Jum_Data+1;
      gotoxy(11,9);printf("MEREK MOBIL   : %s",NamaCustomer5);


        if(TipeBodi=='1'){
              hargatotal+=150000;;
        }else if(TipeBodi=='2'){
              hargatotal+=130000;;
        }else if(TipeBodi=='3'){
              hargatotal+=150000;;
        }else if(TipeBodi=='4'){
              hargatotal+=200000;;
        }else{
              hargatotal+=180000;
        }

        if(MobilAsuransi==0){
        		gotoxy(40,11);printf("TOTAL YANG HARUS DIBAYAR :Rp.%d ",hargatotal );
            gotoxy(40,12);printf("TIDAK TER A S U R A N S I");
            DataNama3[J3]=hargatotal;
        }else{
        		gotoxy(40,11);printf("M O B I L    A S U R A N S I");
            gotoxy(40,5);printf("TOTAL YANG HARUS DIBAYAR :Rp.%d ",hargatotal+= 500000);
            DataNama3[J3]=hargatotal;
        }




          JG3=J3;
          J3++;

  if(PilihPengecatan>0){
	   if(tampJumlahFender1>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahFender1,FENDER_Kerusakan1);
  		}if(tampJumlahFender2>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahFender2,FENDER_Kerusakan2);
  		}if(tampJumlahFender3>0){
        	gotoxy(11,R+=1);printf("%d %s",tampJumlahFender3,FENDER_Kerusakan3);


		}if(tampJumlahPintu1>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu1,PINTU_Kerusakan1);
   	}if(tampJumlahPintu2>0){
         	gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu2,PINTU_Kerusakan2);
   	}if(tampJumlahPintu3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu3,PINTU_Kerusakan3);



   	}if(tampJumlahCupDepan1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan1,CAP_DEPAN_Kerusakan1);
   	}if(tampJumlahCupDepan2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan2,CAP_DEPAN_Kerusakan2);
   	}if(tampJumlahCupDepan3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan3,CAP_DEPAN_Kerusakan3);



      }if(tampJumlahCupBagasi1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi1,Bagasi_Kerusakan1);
      }if(tampJumlahCupBagasi2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi2,Bagasi_Kerusakan2);
      }if(tampJumlahCupBagasi3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi3,Bagasi_Kerusakan3);
      }

//____________________________________________________________
  }if(PilihPengentengan>0){
  	   if(tampJumlahFender1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahFender1,FENDER_Kerusakan1);
  		}if(tampJumlahFender2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahFender2,FENDER_Kerusakan2);
  		}if(tampJumlahFender3>0){
       	gotoxy(11,R+=1);printf("%d %s",tampJumlahFender3,FENDER_Kerusakan3);


		}if(tampJumlahPintu1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu1,PINTU_Kerusakan1);
   	}if(tampJumlahPintu2>0){
         	gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu2,PINTU_Kerusakan2);
   	}if(tampJumlahPintu3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu3,PINTU_Kerusakan3);


   	}if(tampJumlahCupDepan1>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan1,CAP_DEPAN_Kerusakan1);
   	}if(tampJumlahCupDepan2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan2,CAP_DEPAN_Kerusakan2);
   	}if(tampJumlahCupDepan3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan3,CAP_DEPAN_Kerusakan3);


      }if(tampJumlahCupBagasi1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi1,Bagasi_Kerusakan1);
      }if(tampJumlahCupBagasi2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi2,Bagasi_Kerusakan2);
      }if(tampJumlahCupBagasi3>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi3,Bagasi_Kerusakan3);
      }
//_________________________________________________________________________

  }if(PilihPolesBodi>0){
  	   if(tampJumlahFender1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahFender1,FENDER_Kerusakan1);
  		}if(tampJumlahFender2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahFender2,FENDER_Kerusakan2);
  		}if(tampJumlahFender3>0){
        	gotoxy(11,R+=1);printf("%d %s",tampJumlahFender3,FENDER_Kerusakan3);


		}if(tampJumlahPintu1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu1,PINTU_Kerusakan1);
   	}if(tampJumlahPintu2>0){
         	gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu2,PINTU_Kerusakan2);
   	}if(tampJumlahPintu3>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahPintu3,PINTU_Kerusakan3);


   	}if(tampJumlahCupDepan1>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan1,CAP_DEPAN_Kerusakan1);
   	}if(tampJumlahCupDepan2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan2,CAP_DEPAN_Kerusakan2);
   	}if(tampJumlahCupDepan3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupDepan3,CAP_DEPAN_Kerusakan3);


      }if(tampJumlahCupBagasi1>0){
      	gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi1,Bagasi_Kerusakan1);
      }if(tampJumlahCupBagasi2>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi2,Bagasi_Kerusakan2);
      }if(tampJumlahCupBagasi3>0){
      		gotoxy(11,R+=1);printf("%d %s",tampJumlahCupBagasi3,Bagasi_Kerusakan3);
      }

  }if(tampBeliAsesoris>0){
         				if(tampJumlahLayarMonitor>0)	{a1=1;	gotoxy(11,R+=1);printf("%d	 Asesoris Layar Monitor",tampJumlahLayarMonitor);}
					  		if(tampJumlahCarOrganizer>0)	{b1=2;	gotoxy(11,R+=1);printf("%d	 Asesoris Car Organizer",tampJumlahCarOrganizer);}
	   			  	   if(tampJumlahCoverMobil>0)  	{c1=3;	gotoxy(11,R+=1);printf("%d	 Asesoris Cover Mobil",tampJumlahCoverMobil);}
                     if(tampAudioMobil>0)				{d1=4;	gotoxy(11,R+=1);printf("%d	 Asesoris Audio Mobil",tampAudioMobil);}
                     if(tampChargerMobil>0)			{e1=5;	gotoxy(11,R+=1);printf("%d	 Asesoris Carger Mobil",tampChargerMobil);}
                     if(tampPhoneHolder>0)			{f1=6;	gotoxy(11,R+=1);printf("%d	 Asesoris Phone Holder",tampPhoneHolder);}
                     if(tampGpsMobil>0)				{g1=7;	gotoxy(11,R+=1);printf("%d	 Asesoris GPS Mobil",tampGpsMobil);}
  }

  KemblaiKeMENU2();
}
 /*____________________  V O I D  P E N G E N O L A N __________________________
  ______________________________________________________________________________*/
 void  Pengenolan_Setelah_Pembayaran(){
   tampBeliAsesoris=0;
 	PilihAsesoris=0;
 	tampJumlahFender1=0;
 	tampJumlahFender2=0;
 	tampJumlahFender3=0;
 	tampJumlahPintu1=0;
 	tampJumlahPintu2=0;
 	tampJumlahPintu3=0;
 	tampJumlahCupDepan1=0;
 	tampJumlahCupDepan2=0;
 	tampJumlahCupDepan3=0;
 	tampJumlahCupBagasi1=0;
 	tampJumlahCupBagasi2=0;
 	tampJumlahCupBagasi3=0;
 	tampJumlahLayarMonitor=0;
 	tampJumlahCarOrganizer=0;
 	tampJumlahCoverMobil=0;
 	tampAudioMobil=0;
 	tampChargerMobil=0;
 	tampPhoneHolder=0;
 	tampGpsMobil=0;
   tampBeliAsesoris=0;
   PilihPolesBodi=0;
   PilihPengentengan=0;
   PilihPengecatan=0;
   Tamp_Asesoris=1;
 }

/*____________________  V O I D  j A S A P E N G E C A T A N____________________
  ______________________________________________________________________________*/
 void  HargaJasaPengecetan(){

BingkaiUtama();
NamaPerusahaan();

        gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN       = Rp.%d",HargaPengecetanFender1);
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG       = Rp.%d",HargaPengecetanFender2);
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT        = Rp.%d",HargaPengecetanFender3);
        gotoxy(11,8);printf("-.4 PINTU KERUSAKAN RINGAN        = Rp.%d",HargaPengecetanPintu1);
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG        = Rp.%d",HargaPengecetanPintu2);
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT         = Rp.%d",HargaPengecetanPintu3);
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN    = Rp.%d",HargaPengecetanCupdepan1);
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG    = Rp.%d",HargaPengecetanCupdepan2);
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT     = Rp.%d",HargaPengecetanCupdepan3);
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.%d",HargaPengecetanCupBagasi1);
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.%d",HargaPengecetanCupBagasi2);
        gotoxy(11,16);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.%d",HargaPengecetanCupBagasi3);
    KembaliMenuHarga();
    }
/*________________  V O I D  j A S A P E N G E N T E N G A N____________________
  ______________________________________________________________________________*/
 void  HargaJasaPengentengan() {

BingkaiUtama();
NamaPerusahaan();
	     gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN      = Rp.%d",HargaPengentenganFender1);
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG      = Rp.%d",HargaPengentenganFender2);
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT       = Rp.%d",HargaPengentenganFender3);
        gotoxy(11,8);printf("-.4 PINTU KERUSAKAN RINGAN       = Rp.%d",HargaPengentenganPintu1);
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG       = Rp.%d",HargaPengentenganPintu2);
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT         = Rp.%d",HargaPengentenganPintu3);
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN   = Rp.%d",HargaPengentenganCupdepan1);
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG   = Rp.%d",HargaPengentenganCupdepan2);
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT    = Rp.%d",HargaPengentenganCupdepan3);
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.%d",HargaPengentenganCupBagasi1);
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.%d",HargaPengentenganCupBagasi2);
        gotoxy(11,16);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.%d",HargaPengentenganCupBagasi3);
   KembaliMenuHarga();
 }
/*________________  V O I D  j A S A   P O L E S  B O D I ______________________
  ______________________________________________________________________________*/
   void  HargaJasaPoles (){

BingkaiUtama();
NamaPerusahaan();
        gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN      = Rp.%d",HargaPolesFender1);
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG      = Rp.%d",HargaPolesFender2);
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT       = Rp.%d",HargaPolesFender3);
        gotoxy(11,8);printf("-.4 PINTU KERUSAKAN RINGAN       = Rp.%d",HargaPolesPintu1);
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG       = Rp.%d",HargaPolesPintu2);
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT        = Rp.%d",HargaPolesPintu3);
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN   = Rp.%d",HargaPolesCupdepan1);
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG   = Rp.%d",HargaPolesCupdepan2);
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT    = Rp.%d",HargaPolesCupdepan3);
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.%d",HargaPolesCupBagasi1);
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.%d",HargaPolesCupBagasi2);
        gotoxy(11,17);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.%d",HargaPolesCupBagasi3);
     KembaliMenuHarga();
   }
/*________________  V O I D  j A S A   A S E S O R I S _________________________
  ______________________________________________________________________________*/
 void  HargaJasaAsesoris() {

BingkaiUtama();
NamaPerusahaan();

     gotoxy(11,5);printf("-.1 Harga_LAYAR_MONITOR  : Rp.%d",Harga_LAYAR_MONITOR);
     gotoxy(11,6);printf("-.2 Harga_CAR_ORGANIZER  : Rp.%d",Harga_CAR_ORGANIZER);
     gotoxy(11,7);printf("-.3 Harga_COVER_MOBIL    : Rp.%d",Harga_COVER_MOBIL);
	  gotoxy(11,8);printf("-.4 Harga_AUDIO_MOBIL    : Rp.%d",Harga_AUDIO_MOBIL);
	  gotoxy(11,9);printf("-.5 Harga_CHARGER_MOBIL  : Rp.%d",Harga_CHARGER_MOBIL);
	  gotoxy(11,10);printf("-.6 Harga_PHONE_HOLDER   : Rp.%d",Harga_PHONE_HOLDER);
	  gotoxy(11,11);printf("-.7 Harga_GPS_MOBIL      : Rp.%d",Harga_GPS_MOBIL);
     gotoxy(11,12);printf("-.8 Harga_KAMERA_MOBIL   : Rp.%d",Harga_KAMERA_MOBIL);
     gotoxy(11,13);printf("-.9 Harga_DECAL          : Rp.%d",Harga_DECAL);

   KembaliMenuHarga();
}
/*___________________  V O I D  D A F T A R  H AR G A __________________________
  ______________________________________________________________________________*/
//______________________________________________________________________________*/
 void  DAFTAR_HARGA(){
 BingkaiUtama();
 NamaPerusahaan();
    UbahDataHarga=0;
    char Daftar_Harga;

    gotoxy(20,27);printf("PENGATURAN HARGA >> T E K A N 6");
    gotoxy(20,24);printf("TEKAN 0 untuk kembali Keluar  ");
    gotoxy(20,25);printf("TEKAN 5 untuk kembali ke MENU UTAMA");
    gotoxy(10,3);printf("DAFTAR HARGA JASA REPARASI ");
    gotoxy(10,5);printf("-.1 HARGA REPARASI PENGECATAN BODI OTOMOTIF");
    gotoxy(10,7);printf("-.2 HARGA REPARASI PENGENTENGAN BODI OTOMOTIF");
    gotoxy(10,9);printf("-.3 HARGA REPARASI POLES BODI OTOMOTIF");
    gotoxy(10,11);printf("-.4 HARGA REPARASI ASESORIS BODI OTOMOTIF");

    gotoxy(10,13);printf("Input NO. Untuk Mengecek Harga  :");gotoxy(43,13);Daftar_Harga=getche();

			if(Daftar_Harga=='0'||Daftar_Harga =='1'|| Daftar_Harga =='2'|| Daftar_Harga =='3'|| Daftar_Harga =='4'|| Daftar_Harga =='5'|| Daftar_Harga =='6'){

                     if(Daftar_Harga=='6')	{clrscr();MenuUbahHarga();}
                     if(Daftar_Harga=='5')	{clrscr();Sleep(200);MENU();}
         				if(Daftar_Harga=='1')	{clrscr();Sleep(200);HargaJasaPengecetan ();}
					  		if(Daftar_Harga=='2')	{clrscr();Sleep(200);HargaJasaPengentengan ();}
	   			  	   if(Daftar_Harga=='3')	{clrscr();Sleep(200);HargaJasaPoles ();}
                     if(Daftar_Harga=='4')	{clrscr();Sleep(200);HargaJasaAsesoris ();}
                     if(Daftar_Harga=='0')	{exit(0);}
			}else{
               	   Sleep(500);
                     gotoxy(43,13);printf("INPUTAN INFALID !!!");
                     	for(int y=1;y<=2;y++){
                     		gotoxy(62,13);printf("Pilih Nomor...");
                        	gotoxy(62,13);
                        	Sleep(1000);printf("                   ");
                        	Sleep(1000);
                        	clrscr();
                           DAFTAR_HARGA();
                    	   }
         }

}
/*___________________  V O I D  K E M B A L I M E N U H A R G A __________________________
  ______________________________________________________________________________*/

void KembaliMenuHarga(){
    if( UbahDataHarga>0 ){
       gotoxy(20,35);printf("data disimpan");
    }

	do{
		gotoxy(20,35);printf("TEKAN 0 untuk kembali Keluar  ");
		gotoxy(20,36);printf("TEKAN 8 untuk kembali ke Halaman Sebelumnya");
      gotoxy(20,38);KembalikeHarga=getche();

             if(KembalikeHarga=='8'){
                Sleep(500);
                clrscr();
             	 Sleep(300);
             	 DAFTAR_HARGA();
             }else if(KembalikeHarga=='0'){
                Sleep(300);
                exit(0);
             }else{
                gotoxy(20,38);printf("                     ");
                gotoxy(20,38);printf("inputan tidak valid");
                Sleep(300);
                gotoxy(20,38);printf("                     ");
             }

	}while( KembalikeHarga!='8'&&KembalikeHarga!='0');

}

/*___________________  V O I D  S T O K   B A R A N G  _________________________
  ______________________________________________________________________________*/
void STOCK_BARANG (){
    BingkaiUtama();
    gotoxy(115,32);printf("STOK BARANG");
    gotoxy(11,5);printf("TINJAUAN KOLEKTIF STOK BAHAN REPARASI ");
    gotoxy(11,6);printf("B E R D I K A R I   B A N Y U M A S ");

    Stok_Pengecetan_Sebelumnya=Stok_Pengecetan;
    Stok_Pengentengan_Sebelumnya=Stok_Pengentengan;
    Stok_Pemolesan_Sebelumnya=Stok_Pemolesan;
    Stok_Asesoris_Sebelumnya=Stok_Asesoris;

    gotoxy(11,8);printf("NO.1 STOK BAHAN PENGECATAN           : %.1f  %",Stok_Pengecetan);
    gotoxy(11,9);printf("NO.2 STOK BAHAN PENGENTENGAN         : %.1f  %",Stok_Pengentengan);
    gotoxy(11,10);printf("NO.3 STOK BAHAN POLES BODI OTOMOTIF  : %.1f  %",Stok_Pemolesan);
    gotoxy(11,11);printf("NO.4 STOK ASESORIS                   : %.1f  %",Stok_Asesoris);

 ubah_stok();
}
/*___________________  V O I D  S T O K  KEMBALI  _________________________
  ______________________________________________________________________________*/
void STOCK_KEMBALI (){
                                 Stok_Pengecetan=Stok_Pengecetan_Sebelumnya;
                                 Stok_Pengentengan=Stok_Pengentengan_Sebelumnya;
                                 Stok_Pemolesan=Stok_Pemolesan_Sebelumnya;
                                 Stok_Asesoris=Stok_Asesoris_Sebelumnya;
}
/*_________________________  V O I D   L O A D I N G  __________________________
  ______________________________________________________________________________*/
void LOADING2(){
    system("color 9F");
	for(int x=1;x<=1;x++){
   	gotoxy(75,36);printf("Please Waiting system . ..");

		Sleep(70);gotoxy(88,32);printf(" ");//4

		Sleep(70);gotoxy(85,29);printf("o");//1

  	   Sleep(30);gotoxy(87,33);printf(" ");//5

		Sleep(70);gotoxy(87,30);printf("o");//2

   	Sleep(40);gotoxy(85,34);printf(" ");

   	Sleep(70);gotoxy(88,31);printf("o");//3
	   Sleep(70);gotoxy(88,32);printf("o");//4

   	gotoxy(85,29);printf(" ");//1

      Sleep(70);gotoxy(87,33);printf("o");//5

		Sleep(70);gotoxy(85,34);printf(" ");Sleep(100);gotoxy(85,34);printf("o");
		Sleep(70);gotoxy(81,34);printf(" ");Sleep(100);gotoxy(81,34);printf("o");
		Sleep(70);gotoxy(79,33);printf(" ");Sleep(100);gotoxy(79,33);printf("o");

	   gotoxy(12,30);printf(" ");//2

		Sleep(30);gotoxy(78,32);printf(" ");Sleep(100);gotoxy(78,32);printf("o");
		Sleep(30);gotoxy(78,31);printf(" ");Sleep(100);gotoxy(78,31);printf("o");
		gotoxy(79,30);printf("o");

		Sleep(70);gotoxy(81,29);printf(" ");

		Sleep(70);gotoxy(81,29);printf("o");
	   gotoxy(88,31);printf(" ");//3

	}
	clrscr();
	MENU();
}
/*____________ V O I D   U B A H  H A R G A  P E N G E C A T A N________________
  ______________________________________________________________________________*/
 void  UbahHargaPengecetan(){


BingkaiUtama();
NamaPerusahaan();UbahDataHarga=1;

        gotoxy(11,4);printf("DIPERBOLEHKAN KOSONGKAN HANYA JIKA HARGA JIKA STOK KOSONG >");
        gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN       = Rp.");
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG       = Rp.");
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT        = Rp.");
        gotoxy(11,8);printf("-.4 PINTU KERUSAKAN RINGAN        = Rp.");
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG        = Rp.");
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT         = Rp.");
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN    = Rp.");
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG    = Rp.");
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT    = Rp.");
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.");
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.");
        gotoxy(11,16);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.");


             strcpy(Z1,valHarga(52,5,7) );
             strcpy(Z2,valHarga(52,6,7) );
             strcpy(Z3,valHarga(52,7,7) );
             strcpy(Z4,valHarga(52,8,7) );
             strcpy(Z5,valHarga(52,9,7) );
             strcpy(Z6,valHarga(52,10,7) );
             strcpy(Z7,valHarga(52,11,7) );
             strcpy(Z8,valHarga(52,12,7) );
             strcpy(Z9,valHarga(52,13,7) );
             strcpy(Z10,valHarga(52,14,7) );
             strcpy(Z11,valHarga(52,15,7) );
             strcpy(Z12,valHarga(52,16,7) );




 		 HargaPengecetanFender1=atoi(Z1);
       HargaPengecetanFender2=atoi(Z2);
       HargaPengecetanFender3=atoi(Z3);
       HargaPengecetanPintu1=atoi(Z4);
       HargaPengecetanPintu2=atoi(Z5);
       HargaPengecetanPintu3=atoi(Z6);
       HargaPengecetanCupdepan1=atoi(Z7);
       HargaPengecetanCupdepan2=atoi(Z8);
       HargaPengecetanCupdepan3=atoi(Z9);
       HargaPengecetanCupBagasi1=atoi(Z10);
       HargaPengecetanCupBagasi2=atoi(Z11);
       HargaPengecetanCupBagasi3=atoi(Z12);



    KembaliMenuHarga();
 }
/*___________  V O I D   U B A H  H A R G A  P E N G E N T E N G A N____________
  ______________________________________________________________________________*/
 void  UbahHargaPengentengan() {

BingkaiUtama();
NamaPerusahaan();
        UbahDataHarga=2;

        gotoxy(11,4);printf("DIPERBOLEHKAN KOSONGKAN HANYA JIKA HARGA JIKA STOK KOSONG >");
        gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN       = Rp.");
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG       = Rp.");
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT        = Rp.");
        gotoxy(11,8);printf("-.4 FENDER KERUSAKAN BERAT        = Rp.");
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG        = Rp.");
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT         = Rp.");
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN    = Rp.");
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG    = Rp.");
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT    = Rp.");
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.");
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.");
        gotoxy(11,16);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.");


             strcpy(Z21,valHarga(52,5,7) );
             strcpy(Z22,valHarga(52,6,7) );
             strcpy(Z23,valHarga(52,7,7) );
             strcpy(Z24,valHarga(52,8,7) );
             strcpy(Z25,valHarga(52,9,7) );
             strcpy(Z26,valHarga(52,10,7) );
             strcpy(Z27,valHarga(52,11,7) );
             strcpy(Z28,valHarga(52,12,7) );
             strcpy(Z29,valHarga(52,13,7) );
             strcpy(Z210,valHarga(52,14,7) );
             strcpy(Z211,valHarga(52,15,7) );
             strcpy(Z212,valHarga(52,16,7) );



       HargaPengentenganFender1=atoi(Z21);
       HargaPengentenganFender2=atoi(Z22);
       HargaPengentenganFender3=atoi(Z23);
       HargaPengentenganPintu1=atoi(Z24);
       HargaPengentenganPintu2=atoi(Z25);
       HargaPengentenganPintu3=atoi(Z26);
       HargaPengentenganCupdepan1=atoi(Z27);
       HargaPengentenganCupdepan2=atoi(Z28);
       HargaPengentenganCupdepan3=atoi(Z29);
       HargaPengentenganCupBagasi1=atoi(Z210);
       HargaPengentenganCupBagasi2=atoi(Z211);
       HargaPengentenganCupBagasi3=atoi(Z212);


   KembaliMenuHarga();
 }

/*_____________  V O I D   U B A H  H A R G A  P O L E S  B O D I ______________
  ______________________________________________________________________________*/
   void  UbahHargaPoles (){

BingkaiUtama();
NamaPerusahaan();
       UbahDataHarga=3;

        gotoxy(11,4);printf("DIPERBOLEHKAN KOSONGKAN HANYA JIKA HARGA JIKA STOK KOSONG >");
        gotoxy(11,5);printf("-.1 FENDER KERUSAKAN RINGAN      = Rp.");
        gotoxy(11,6);printf("-.2 FENDER KERUSAKAN SEDANG      = Rp.");
        gotoxy(11,7);printf("-.3 FENDER KERUSAKAN BERAT       = Rp.");
        gotoxy(11,8);printf("-.4 PINTU KERUSAKAN RINGAN       = Rp.");
        gotoxy(11,9);printf("-.5 PINTU KERUSAKAN SEDANG       = Rp.");
        gotoxy(11,10);printf("-.6 PINTU KERUSAKAN BERAT        = Rp.");
        gotoxy(11,11);printf("-.7 CAP DEPAN KERUSAKAN RINGAN   = Rp.");
        gotoxy(11,12);printf("-.8 CAP DEPAN KERUSAKAN SEDANG   = Rp.");
        gotoxy(11,13);printf("-.9 CAP DEPAN KERUSAKAN BERAT    = Rp.");
        gotoxy(11,14);printf("-.10 CAP BAGASI KERUSAKAN RINGAN = Rp.");
        gotoxy(11,15);printf("-.11 CAP BAGASI KERUSAKAN SEDANG = Rp.");
        gotoxy(11,16);printf("-.12 CAP BAGASI KERUSAKAN BERAT  = Rp.");


             strcpy(Z31,valHarga(52,5,7) );
             strcpy(Z32,valHarga(52,6,7) );
             strcpy(Z33,valHarga(52,7,7) );
             strcpy(Z34,valHarga(52,8,7) );
             strcpy(Z35,valHarga(52,9,7) );
             strcpy(Z36,valHarga(52,10,7) );
             strcpy(Z37,valHarga(52,11,7) );
             strcpy(Z38,valHarga(52,12,7) );
             strcpy(Z39,valHarga(52,13,7) );
             strcpy(Z310,valHarga(52,14,7) );
             strcpy(Z311,valHarga(52,15,7) );
             strcpy(Z312,valHarga(52,16,7) );



       HargaPolesFender1=atoi(Z31);
       HargaPolesFender2=atoi(Z32);
       HargaPolesFender3=atoi(Z33);
       HargaPolesPintu1=atoi(Z34);
       HargaPolesPintu2=atoi(Z35);
       HargaPolesPintu3=atoi(Z36);
       HargaPolesCupdepan1=atoi(Z37);
       HargaPolesCupdepan2=atoi(Z38);
       HargaPolesCupdepan3=atoi(Z39);
       HargaPolesCupBagasi1=atoi(Z310);
       HargaPolesCupBagasi2=atoi(Z311);
       HargaPolesCupBagasi3=atoi(Z312);




     KembaliMenuHarga();
   }

/*_____________  V O I D     U B A H  H A R G A    A S E S O R I S _____________
  ______________________________________________________________________________*/
 void  UbahHargaAsesoris() {

BingkaiUtama();
NamaPerusahaan();
       UbahDataHarga=4;

     gotoxy(11,4);printf("DIPERBOLEHKAN KOSONGKAN HANYA JIKA HARGA JIKA STOK KOSONG >");
     gotoxy(11,5);printf("-.1 Harga_LAYAR_MONITOR  : Rp.");
     gotoxy(11,6);printf("-.2 Harga_CAR_ORGANIZER  : Rp.");
     gotoxy(11,7);printf("-.3 Harga_COVER_MOBIL    : Rp.");
	  gotoxy(11,8);printf("-.4 Harga_AUDIO_MOBIL    : Rp.");
	  gotoxy(11,9);printf("-.5 Harga_CHARGER_MOBIL  : Rp.");
	  gotoxy(11,10);printf("-.6 Harga_PHONE_HOLDER   : Rp.");
	  gotoxy(11,11);printf("-.7 Harga_GPS_MOBIL      : Rp.");
     gotoxy(11,12);printf("-.8 Harga_KAMERA_MOBIL   : Rp.");
     gotoxy(11,13);printf("-.9 Harga_DECAL          : Rp.");


             strcpy(Z41,valHarga(44,5,7) );
             strcpy(Z42,valHarga(44,6,7) );
             strcpy(Z43,valHarga(44,7,7) );
             strcpy(Z44,valHarga(44,8,7) );
             strcpy(Z45,valHarga(44,9,7) );
             strcpy(Z46,valHarga(44,10,7) );
             strcpy(Z47,valHarga(44,11,7) );
             strcpy(Z48,valHarga(44,12,7) );
             strcpy(Z49,valHarga(44,13,7) );

       KembaliMenuHarga();
   }

/*_________________  V O I D  M E N U   U B A H  H A R G A _____________________
  ______________________________________________________________________________*/
void MenuUbahHarga(){

	clrscr();

   BingkaiUtama();
   NamaPerusahaan();

	char UbahHarga;
   gotoxy(20,24);printf("TEKAN 0 untuk  Keluar  ");
	gotoxy(20,25);printf("TEKAN 5 untuk kembali");
	gotoxy(11,5);printf("UBAH STANDAR HARGA PERUSAHAAN");
	gotoxy(11,6);printf("NO.1 HARGA PENGECATAN");
	gotoxy(11,7);printf("NO.2 HARGA PENGENTENGAN");
	gotoxy(11,8);printf("NO.3 HARGA POLES BODI");
	gotoxy(11,9);printf("NO.4 HARGA ASESORIS");
	gotoxy(11,11);printf("NO.PILIH NOMOR HARGA : ");gotoxy(35,11);UbahHarga=getche();

			if(UbahHarga=='0'||UbahHarga =='1'|| UbahHarga =='2'|| UbahHarga =='3'|| UbahHarga =='4'|| UbahHarga =='5'){

                     if(UbahHarga =='5')	{clrscr();Sleep(200);MENU();}
         				if(UbahHarga =='1')	{clrscr();UbahHargaPengecetan ();}
					  		if(UbahHarga =='2')	{clrscr();UbahHargaPengentengan();}
	   			  	   if(UbahHarga =='3')	{clrscr();UbahHargaPoles ();}
                     if(UbahHarga =='4')	{clrscr();UbahHargaAsesoris ();}
                     if(UbahHarga =='0')	{exit(0);}
			}else{
               	   Sleep(500);
                     gotoxy(1,20);printf("INPUTAN INFALID !!!");
                     	for(int y=1;y<=2;y++){
                     		gotoxy(24,11);printf("Pilih Nomor...");
                        	gotoxy(24,11);
                        	Sleep(1000);printf("                   ");
                        	Sleep(1000);
                        	clrscr();
                           MenuUbahHarga();
                    	   }
         }
}
/*_______________________  V O I D  U B A H  S T O K ___________________________
  ______________________________________________________________________________*/
 void ubah_stok(){
  float StokRefresh=100.0;
   char RefreshStokbarang;

    do{
		gotoxy(20,23);printf("TEKAN 0 untuk kembali Keluar  ");
		gotoxy(20,22);printf("TEKAN 8 untuk kembali ke Halaman Sebelumnya");
      gotoxy(20,25);printf("REFRESH STOK BARANG  >>> TEKAN 7 ");
      gotoxy(20,26);RefreshStokbarang=getche();

             if(RefreshStokbarang=='8'){
                clrscr();
             	 MENU();
             }else if(RefreshStokbarang=='0'){
                exit(0);
             }else if(RefreshStokbarang=='7'){
             	  		do{
               			 gotoxy(11,13);printf("Pilih No.Stok yang ingin di refresh : ");gotoxy(50,13);okeRefresh=getche();
                      			if(okeRefresh=='1'){
                          				Stok_Pengecetan=StokRefresh;
                                    Sleep(300);
                                    gotoxy(11,13);printf("                                           ");
                                    gotoxy(50,13);printf("      ");
                          				STOCK_BARANG ();
                      			}else if(okeRefresh=='2'){
                          				Stok_Pengentengan=StokRefresh;
                                    Sleep(300);
                                    gotoxy(11,13);printf("                                           ");
                                    gotoxy(50,13);printf("      ");
                          				STOCK_BARANG ();
                      			}else if(okeRefresh=='3'){
                          				Stok_Pemolesan=StokRefresh;
                                    Sleep(300);
                                    gotoxy(11,13);printf("                                           ");
                                    gotoxy(50,13);printf("      ");
                          				STOCK_BARANG ();
                      			}else if(okeRefresh=='4'){
                          				Stok_Asesoris=StokRefresh;
                                    Sleep(300);
                                    gotoxy(11,13);printf("                                           ");
                                    gotoxy(50,13);printf("      ");
                          				STOCK_BARANG ();
                     		 }else{
                                    Sleep(300);
                                    gotoxy(50,13);printf("                    ");
                                    Sleep(300);
   	   	          					gotoxy(50,13);printf("inputan tidak valid");
            	   	 					Sleep(300);
               	 	 					gotoxy(50,13);printf("                     ");
                            }
                		}while(okeRefresh!='1' && okeRefresh!='2' &&  okeRefresh!='3' && okeRefresh!='4'  );
             }else{
                gotoxy(20,26);printf("                 ");
                Sleep(200);
                gotoxy(20,26);printf("inputan tidak valid");
                Sleep(200);
                gotoxy(20,26);printf("                     ");
             }
    }while(RefreshStokbarang!='8' && RefreshStokbarang!='0' &&  RefreshStokbarang!='7' );
}
/*_______________________  V O I D  U B A H  S T O K ___________________________
  ______________________________________________________________________________*/
void Peringatan_Stok_Habis(){

  if(InputJenisReparasi=='1'&&Stok_Pengecetan==0.0){
     gotoxy(40,25);printf ("Stok Pengecatan Tidak Mencukupi !!");
     Sleep(1500);
     clrscr();
     Pengenolan_Setelah_Pembayaran();
     JenisReparasi();
     }
  if( InputJenisReparasi=='2'&&Stok_Pengentengan==0.0){
     gotoxy(40,25);printf ("Stok Pengentengan Tidak Mencukupi !!");
     Sleep(1500);
     clrscr();
     Pengenolan_Setelah_Pembayaran();
     JenisReparasi();
     }
  if (InputJenisReparasi=='3'&&Stok_Pemolesan==0.0){
     gotoxy(40,25); printf ("Stok Pemolesan Tidak Mencukupi !!");
     Sleep(1500);
     clrscr();
     Pengenolan_Setelah_Pembayaran();
     JenisReparasi();
     }
  if (InputJenisReparasi=='4' && Stok_Asesoris<=0.0){
     gotoxy(40,25); printf ("Stok Asesoris Tidak Mencukupi !!");
     Sleep(1500);
     clrscr();
     Pengenolan_Setelah_Pembayaran();
     JenisReparasi();
     }


}
/*______________________  V A L I D A S I   H A R G A __________________________
  ______________________________________________________________________________*/

char* valHarga(int x,int y,int batas){
char user[50];
int a=0;


   gotoxy(x,y);user[a]=getch();
   while(user[a]!=13){
       if(user[0]=='0'){
         a=0;
         gotoxy(x,y);printf("                         ");
			gotoxy(x,y);printf("tidak valid !!");
         Sleep(300);
         gotoxy(x,y);printf("                         ");
         gotoxy(x+a,y);user[a]=getch();


       }

      if(!(user[a]=='0'||user[a]=='1'||user[a]=='2'||user[a]=='3'||user[a]=='4'||user[a]=='5'||user[a]=='6'||user[a]=='7'||user[a]=='8'||user[a]=='9'||user[a]==8||a==0&&user[a]=='0')){
         a=0;
         gotoxy(x,y);printf("                         ");
			gotoxy(x,y);printf("tidak valid !!");
         Sleep(300);
         gotoxy(x,y);printf("                         ");
         gotoxy(x+a,y);user[a]=getch();
       }
        else{
      if(user[a]==8){
          a--;
      	 if(a<0){
      		a=0;
      	 }gotoxy(x+a,y);printf(" ");
      }else{
         printf("%c",user[a]);
      	a++;
         }

      if(a>batas){
      	a=0;
         gotoxy(x,y);printf("                         ");
			gotoxy(x,y);printf("Maksimal %d digit !!",batas);
         Sleep(500);
         gotoxy(x,y);printf("                         ");
         }
         gotoxy(x+a,y);user[a]=getch();
    }

   }user[a]=NULL;

return user;
}

/*_______________________  V O I D  DATA C U S T O M E R ___________________________________________________________________
  _________________________________________________________________________________________________________________________*/

//_________________________________________________________________________________________________________________________*/

//_________________________________________________________________________________________________________________________*/

//_________________________________________________________________________________________________________________________*/


 void DATA_CUSTOMER(){
 BingkaiUtama();

   gotoxy(122,32);printf("DATA CUSTOMER");

     for(int x=0;x<Jum_Data;x++){

	    	 gotoxy(5,x+2);printf("- CUSTOMER : %s",DataNama[x]);

     }


     for(int x=0;x<Jum_Data;x++){

	    	 gotoxy(36,x+2);printf("- profil instagram  : %s",DataNama2[x]);

     }

     for(int x=0;x<Jum_Data;x++){

	    	 gotoxy(80,x+2);printf("- Harga : Rp.%d",DataNama3[x]);

     }



     KemblaiKeMENU();
 }


//_________________________________________________________________________________________________________________________*/

 /////////////////////////////////////
  void NamCustomer2(){
   int h=1;
   int b=0;
   int r=1;
   int y=0;
   strcpy(NamaCustomer,valBATAS(27,14,20) );
   strupr(NamaCustomer);

      y=strlen(NamaCustomer);

  if(y<1){
          gotoxy(27,14);printf("                                 ");
          gotoxy(27,14);printf("input nama!!");
          Sleep(500);
          gotoxy(27,14);printf("                                  ");
          NamCustomer2();
       }


 for(int x=0;x<y;x++){
   if(NamaCustomer[x]>64&&NamaCustomer[x]<91||NamaCustomer[x]==32||NamaCustomer[x]==39){
        r=0;}
   else{
          gotoxy(27,14);printf("                         ");
          gotoxy(27,14);printf("Tidak valid!");
          Sleep(500);
          gotoxy(27,14);printf("                         ");
          NamCustomer2();
    }
  //____________________________________________
          if(r==0){
             if(NamaCustomer[x]==32){
                b=1;
             }
             if(b==1&&NamaCustomer[x+1]==32){
                gotoxy(27,14);printf("                         ");
                gotoxy(27,14);printf("Tidak valid!! LL");
                Sleep(500);
                gotoxy(27,14);printf("                         ");
                NamCustomer2();
             }
             if(NamaCustomer[x]>64&&NamaCustomer[x]<91){
               h=0;
             }
             if(NamaCustomer[0]==39){
               h=1;
             }
				 if(NamaCustomer[x-1]!=39&&NamaCustomer[x]==39){
               h=0;
             }

             if(NamaCustomer[y-1]==39||NamaCustomer[x]==39&&NamaCustomer[x+1]==39){
                 h=1;
             }
             if( NamaCustomer[0]==32 ||NamaCustomer[x]==32&&NamaCustomer[x+1]==32|| NamaCustomer[y-1]==32){
                 h=1;
             }
          }

    if (h==1){

          gotoxy(27,14);printf("                                 ");
          gotoxy(27,14);printf("input nama!!");
          Sleep(500);
          gotoxy(27,14);printf("                                  ");
          NamCustomer2();
    }else{
      gotoxy(27,14);printf("%s",NamaCustomer);
    //////////////////////////////////////////////////////
    strcpy(DataNama[J],NamaCustomer);

    /////////////////////////////////////


    }
 }

      JG=J;
      J++;
}


//_________________________________________________________________________________________________________________________*/

//_________________________________________________________________________________________________________________________*/

//_________________________________________________________________________________________________________________________*/


/////////////////////////////////////////////
 //_______________________________________________________________

/*______________________  V A L I D A S I   B A T A S   ____________________________
  ______________________________________________________________________________*/

char* valBATAS(int x,int y,int batas){
char user[500];
int a=0;

   gotoxy(x,y);user[a]=getch();
   while(user[a]!=13){

      if(user[a]==8){
          a--;
      	 if(a<0){
      		a=0;
      	 }gotoxy(x+a,y);printf( " ");
      }else{
         printf("%c",user[a]);
      	a++;
         }

   if(a>batas){
      	a=0;
         gotoxy(x,y);printf("                         ");
			gotoxy(x,y);printf("Maksimal %d digit !!",batas);
         Sleep(500);
         gotoxy(x,y);printf("                         ");
         }
         gotoxy(x+a,y);user[a]=getch();
   }

 user[a]=NULL;
return user;
}

////______________________________________________________________
 void Password2(){
   int h=1;
   int b=0;
   strcpy(password,valBATAS(92,23,6) );

     int y=strlen(password);

     for(int x=0;x<y;x++){
      if(password[x]=='0'||password[x]=='1'||password[x]=='2'||password[x]=='3'||password[x]=='4'||password[x]=='5'||password[x]=='6'||password[x]=='7'||password[x]=='8'||password[x]=='9'||password[x]==8){
          h=0;
      }else{
          h=1;
      }
   }
    if (h==1||y!=6){
          if(y!=6){
            gotoxy(92,23);printf("                         ");
            gotoxy(92,23);printf("min. 6 karakter");
            Sleep(800);
            gotoxy(92,23);printf("                         ");
            Password2();
           }
          if(h==1){
            gotoxy(92,23);printf("                         ");
            gotoxy(92,23);printf("Tidak valid!!");
            Sleep(800);
            gotoxy(92,23);printf("                         ");
            Password2();
           }


    }
 }

//______________________________________________________________________________*/
 void NoKendaraan1(){


   strcpy(No_KendaraanAwal,valBATAS(17,9,2) );
    int y=strlen(No_KendaraanAwal);

    for(int x=0;x<y;x++){
    if(No_KendaraanAwal[x]>64&&No_KendaraanAwal[x]<91){
         		 gotoxy(17,9);printf("                         ");
		  	 		 gotoxy(17,9);printf("Tidak valid!!");
                Sleep(500);
                gotoxy(17,9);printf("                         ");
                NoKendaraan1();
          }
     }
 }
//////////////////////
 void NoKTP2(){
   int h=1;
   int b=0;
   strcpy(NoKtp2,valBATAS(31,22,4) );
   int y=strlen(NoKtp2);

   for(int x=0;x<y;x++){
      if(NoKtp2[x]=='A'||NoKtp2[x]=='B'||NoKtp2[x]=='C'||NoKtp2[x]=='D'||NoKtp2[x]=='E'||NoKtp2[x]=='G'||NoKtp2[x]=='H'||NoKtp2[x]=='I'||NoKtp2[x]=='J'||NoKtp2[x]=='K'||NoKtp2[x]=='L'||NoKtp2[x]=='M'||NoKtp2[x]=='N'||NoKtp2[x]=='O'||NoKtp2[x]=='P'||NoKtp2[x]=='Q'||NoKtp2[x]=='R'||NoKtp2[x]=='S'||NoKtp2[x]=='T'||NoKtp2[x]=='U'||NoKtp2[x]=='V'||NoKtp2[x]=='W'||NoKtp2[x]=='X'||NoKtp2[x]=='Y'||NoKtp2[x]=='Z'){

          gotoxy(31,22);printf("                         ");
          gotoxy(31,22);printf("Min. 1 karakter.!!");
          Sleep(500);
          gotoxy(31,22);printf("                         ");
           NoKTP2();
    }



      if(NoKtp2[x]=='0'||NoKtp2[x]=='1'||NoKtp2[x]=='2'||NoKtp2[x]=='3'||NoKtp2[x]=='4'||NoKtp2[x]=='5'||NoKtp2[x]=='6'||NoKtp2[x]=='7'||NoKtp2[x]=='8'||NoKtp2[x]=='9'||NoKtp2[x]==8){
          h=0;
      }else{
          h=1;
      }
   }
    if (h==1||y==0){
      if(h==1){
          gotoxy(31,22);printf("                         ");
          gotoxy(31,22);printf("Tidak valid!!");
          Sleep(500);
          gotoxy(31,22);printf("                         ");
          NoKTP2();
      }
      if(y==0){
          gotoxy(31,22);printf("                         ");
          gotoxy(31,22);printf("Min. 1 karakter.!!");
          Sleep(500);
          gotoxy(31,22);printf("                         ");
           NoKTP2();
    }
 }
}
 ///_______________________________________
 void NoKTP7(){
   int h=1;
   int b=0;

   strcpy(NoKtp7,valBATAS(27,22,2) );
     strupr(NoKtp7);
     int y=strlen(NoKtp7);


   for(int x=0;x<y;x++){
       if(NoKtp7[x]=='0'||NoKtp7[x]=='1'||NoKtp7[x]=='2'||NoKtp7[x]=='3'||NoKtp7[x]=='4'||NoKtp7[x]=='5'||NoKtp7[x]=='6'||NoKtp7[x]=='7'||NoKtp7[x]=='8'||NoKtp7[x]=='9'||NoKtp7[x]==8){

          gotoxy(27,22);printf("                         ");
          gotoxy(27,22);printf("Tidak valid!!");
          Sleep(500);
          gotoxy(27,22);printf("                         ");
          NoKTP7();

                }else{
                gotoxy(27,22);printf("%s",NoKtp7);


                }
      if(NoKtp7[x]=='A'||NoKtp7[x]=='B'||NoKtp7[x]=='C'||NoKtp7[x]=='D'||NoKtp7[x]=='E'||NoKtp7[x]=='G'||NoKtp7[x]=='H'||NoKtp7[x]=='I'||NoKtp7[x]=='J'||NoKtp7[x]=='K'||NoKtp7[x]=='L'||NoKtp7[x]=='M'||NoKtp7[x]=='N'||NoKtp7[x]=='O'||NoKtp7[x]=='P'||NoKtp7[x]=='Q'||NoKtp7[x]=='R'||NoKtp7[x]=='S'||NoKtp7[x]=='T'||NoKtp7[x]=='U'||NoKtp7[x]=='V'||NoKtp7[x]=='W'||NoKtp7[x]=='X'||NoKtp7[x]=='Y'||NoKtp7[x]=='Z'){
      h=0;
		}else{
          h=1;
      }

   }
    if (h==1){
      if(h==1){
          gotoxy(27,22);printf("                         ");
          gotoxy(27,22);printf("Tidak valid!!");
          Sleep(500);
          gotoxy(27,22);printf("                         ");
          NoKTP7();

      }else{
      gotoxy(27,22);printf("%s",NoKtp7);

      }
 }
}



  ///_______________________________________
  void NamCustomer4(){
   int h=1;
   int b=0;

   strcpy(NamaCustomer4,valBATAS(36,22,3) );
   strupr(NamaCustomer4);
     int y=strlen(NamaCustomer4);

 for(int x=0;x<y;x++){
 	     if(NamaCustomer4[x]>64&&NamaCustomer4[x]<91||NamaCustomer4[x]=='0'||NamaCustomer4[x]=='1'||NamaCustomer4[x]=='2'||NamaCustomer4[x]=='3'||NamaCustomer4[x]=='4'||NamaCustomer4[x]=='5'||NamaCustomer4[x]=='6'||NamaCustomer4[x]=='7'||NamaCustomer4[x]=='8'||NamaCustomer4[x]=='9'||NamaCustomer4[x]==8){
          h=0;
         }
      if(x==y-1){
        if(NamaCustomer4[x]=='0'||NamaCustomer4[x]=='1'||NamaCustomer4[x]=='2'||NamaCustomer4[x]=='3'||NamaCustomer4[x]=='4'||NamaCustomer4[x]=='5'||NamaCustomer4[x]=='6'||NamaCustomer4[x]=='7'||NamaCustomer4[x]=='8'||NamaCustomer4[x]=='9'||NamaCustomer4[x]==8){
            h=1;
        }
      }

    if (h==1){
          gotoxy(36,22);printf("                         ");
          gotoxy(36,22);printf("Tidak valid!!");
          Sleep(500);
          gotoxy(36,22);printf("                         ");
          NamCustomer4();
    }else{
          gotoxy(36,22);printf("%s",NamaCustomer4);
    }
 }
}
////////////////////////////////////////////////////////////


 ///////////////////////////////////////////////////
  void NamCustomer5(){
   int h=1;
   int b=0;
   int r=1;
   int y=0;
   strcpy(NamaCustomer5,valBATAS(26,20,20) );
   strupr(NamaCustomer5);
      y=strlen(NamaCustomer5);

  if(y<1){
          gotoxy(26,20);printf("                                 ");
          gotoxy(26,20);printf("input nama!!");
          Sleep(500);
          gotoxy(26,20);printf("                                  ");
          NamCustomer5();
       }


 for(int x=0;x<y;x++){
   if(NamaCustomer5[x]>64&&NamaCustomer5[x]<91||NamaCustomer5[x]==32){
        r=0;}
   else{
          gotoxy(26,20);printf("                                 ");
          gotoxy(26,20);printf("input nama!!");
          Sleep(500);
          gotoxy(26,20);printf("                                  ");
          NamCustomer5();
    }
  //____________________________________________
          if(r==0){
             if(NamaCustomer5[x]==32){
                b=1;
             }
             if(b==1&&NamaCustomer5[x+1]==32){

          gotoxy(26,20);printf("                                 ");
          gotoxy(26,20);printf("input nama!!");
          Sleep(500);
          gotoxy(26,20);printf("                                  ");
          NamCustomer5();
             }
             if(NamaCustomer5[x]>64&&NamaCustomer5[x]<91){
               h=0;
             }
             if( NamaCustomer5[0]==32 ||NamaCustomer5[x]==32&&NamaCustomer5[x+1]==32|| NamaCustomer5[y-1]==32){
                 h=1;
             }
          }

    if (h==1){

          gotoxy(26,20);printf("                                 ");
          gotoxy(26,20);printf("input nama!!");
          Sleep(500);
          gotoxy(26,20);printf("                                  ");
          NamCustomer5();
    }else{
      gotoxy(26,20);printf("%s",NamaCustomer5);
    }
 }
}

/////////////////////////////////////////////
////////////////////////////////////////////////////////////
  void NamCustomer6(){
   int y=0;
   strcpy(NamaCustomer6,valBATAS(32,16,20) );
   y=strlen(NamaCustomer6);

                          //
 for(int x=0;x<y;x++){
   if(NamaCustomer6[0]!=64){
          gotoxy(32,16);printf("                         ");
          gotoxy(32,16);printf("Tidak valid!");
          Sleep(500);
          gotoxy(32,16);printf("                         ");
          NamCustomer6();
    }
   if(NamaCustomer6[x]==32){
          gotoxy(32,16);printf("                         ");
          gotoxy(32,16);printf("Tidak valid!");
          Sleep(500);
          gotoxy(32,16);printf("                         ");
          NamCustomer6();
    }else{
          gotoxy(32,16);printf("%s",NamaCustomer6);
       strcpy(DataNama2[J2],NamaCustomer6);

    }
 }
   JG2=J2;
      J2++;

}

/////////////////////////////////
void BatasData(){

   int v=0;
   if(J==40){
      v=1;
      for(int x=0;x<=J;x++){
       strcpy(DataNama[x],"");
       strcpy(DataNama2[x],"");

        DataNama3[x]=0;
      }

      if(v==1){
      clrscr();
      gotoxy(11,1);printf("B E R D I K A R I    B A N Y U M A S\n<< 40 DATA CUSTOMER TELAH DIREKAP \nDan disimpan");

      gotoxy(11,4);printf("dicetak ....... >>");
      J=0;
      J2=0;
		J3=0;

      Sleep(2000);
      exit(0);


      }
   }
}
//________________________________________________________________________________________
void NamaPerusahaan(){

gotoxy(95,4);textcolor(8);printf("R E P A R A S I   M O B I L");
gotoxy(95,5);printf("<< BERDIKARI  B A N Y U M A S");
gotoxy(95,6);printf("Jln. Gatot Subroto No.1 Sudagaran");
gotoxy(95,7);printf("Banyumas");
gotoxy(95,8);printf("ANDALAN CUSOMER INDONESIA");
gotoxy(95,9);printf("Tel. 0877 0505 4601");
        }

//________________________________________________________________________________________
void logo(){
  int b=29,c=29;
  char E='E';
  char teks[]={'s','t','i','m','a','t','i','o','n','A','p','l','i','c','a','t','i','o','n','.'};
  system("color 70");


	textbackground(7);
   Sleep(50);textcolor(4);gotoxy(60,34);   cprintf("%c",254);
   Sleep(60);textcolor(6);gotoxy(70,34);   cprintf("%c",254);
   Sleep(60);textcolor(9);gotoxy(80,34);   cprintf("%c",254);
   Sleep(70);textcolor(10);gotoxy(90,34);  cprintf("%c",254);
   Sleep(72);textcolor(12);gotoxy(100,34); cprintf("%c",254);


   Sleep(90);gotoxy(28,23);textbackground(8);cprintf("%c",E);

   for(int x=0;x<20;x++){
    if (x<9){
	  	 Sleep(50);gotoxy(b+=2,23);textcolor(8);printf("%c",teks[x]);
    }else{
        	 Sleep(50);gotoxy(c+=2,23);textcolor(8);printf(" ");printf("%c",teks[x]);
    }
   }

    Sleep(50);
	gotoxy(34,18);textbackground(8);cprintf("       / ");
	gotoxy(34,19);textbackground(8);cprintf("  ");
	gotoxy(34,20);textbackground(8);cprintf("  ");
	gotoxy(34,21);textbackground(8);cprintf("     /   ");
	gotoxy(34,22);textbackground(8);cprintf("  ");
	gotoxy(34,24);textbackground(8);cprintf("   /     ");


    LOG_IN();
}
////////////////////////////////////

void Batas_Reparasi(){


if(tampJumlahTambahPanel==20){
  gotoxy(40,25);printf("jumlah panel terlalu banyak");
  Sleep(1000);
  Pengenolan_Setelah_Pembayaran();

  MENU();
}


}

//////////////////////////////////
void PENGATURAN_TAMPILAN(){
   BingkaiUtama();

	do{

      gotoxy(20,23);printf("P E N G A T U R A N   T A M P I L A N ");

      gotoxy(20,26);printf("KEBALI >> Tekan 0");
		gotoxy(20,12);printf(" MODE DAFLUET >> Tekan 8");
		gotoxy(20,15);printf(" MODE TERANG >> Tekan 1");
		gotoxy(20,18);printf(" MODE GELAP >> Tekan 2");
      gotoxy(20,22);warna=getche();

             if(warna=='1'){
                 system("color f0");
                 MENU();
             }else if(warna=='2'){

                  system("color 0B");
                  MENU();
             }else if(warna=='8'){
              system("color 9f");

                  MENU();
             }else if(warna=='0'){

                  MENU();
             }else{
                gotoxy(20,22);printf("                     ");
                gotoxy(20,22);printf("inputan tidak valid");
                Sleep(300);
                gotoxy(20,22);printf("                     ");
             }
      } while(warna!='1' && warna!='2' && warna!='0' );

}






///////////////
main(){
 time_t sekarang; //UNTUK PENDEKLARAN WAKTU

 sekarang=time(NULL);    //INISIALISASI WAKTU
 waktu=localtime(&sekarang);    //WAKTU INISIALISASI MENGAMBIL WAKTU DARI PC


 logo();


getch ();
}






