   M S B A M L   `   `   `  ����?  ;zad2, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullclr-namespace:zad2zad2  5   	       zad2.MainWindow   5   	   W SPresentationCore, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   $localclr-namespace:zad2     5   	     � Title$  Rodzaj przesylki��5   	   $	��350��6"   $	��300��6/   .��5	      �  � RowDefinitions 5
   
   �� 5      $��2* �6   �� 5      $
��0.5* �6   �� 5      $��2* �6    � ColumnDefinitions 5   
   �� 5      �� 5      .+�5   
   �� $��Rodzaj przesyłki��6   $��20(�6-   $��0��6;   $��2��6H   .��5      �  5      �� 5      �� 5      �� 5      .+�5      	� -   5         	�Name$ 	Pocztowka��5   n   $��0��6   $��Center=�6+    	� 	GroupName$ package��6F   $��
Pocztówka��6Z   6n   	� 5      -   5        $
 List��5   i   $��1��6   $��Center=�6+   $ package��6F   $
��List��6Z   6i   	� 5      -   5        $ Paczka��5   k   $��2��6   $��Center=�6+   $ package��6F   $��Paczka��6Z   6k   5       5!      �� 5#   
   -   5        $��1��5#      $��2��6   $��Sprawdz cene��62   $	��Top=�6I   $	��0 5q�6a   6n   �� 5%   
   -   5         ��Name$ Photo��5%   -   $��2��6   $��0��6   6-   �� 5&   
   -   5         ��Name$ Wynik��5&   j   $��2��6   $��1��6   $��Center=�6/   $��20(�6J   $
��Bold"�6X   $��0 zł��6y    �� TextAlignment$ Center=�6�   5'      5(      