   M S B A M L   `   `   `  ����?  ;zad2, Version=1.0.0.0, Culture=neutral, PublicKeyToken=nullclr-namespace:zad2zad2  5   	       zad2.MainWindow   5   	   W SPresentationCore, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35\ XPresentationFramework, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35e aSystem.Windows.Controls.Ribbon, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089R NWindowsBase, Version=8.0.0.0, Culture=neutral, PublicKeyToken=31bf3856ad364e35F 9http://schemas.microsoft.com/winfx/2006/xaml/presentation     5   	   R NSystem.Xaml, Version=8.0.0.0, Culture=neutral, PublicKeyToken=b77a5c561934e089:x,http://schemas.microsoft.com/winfx/2006/xaml     5   	   @d2http://schemas.microsoft.com/expression/blend/2008     5   	   Jmc;http://schemas.openxmlformats.org/markup-compatibility/2006     5   	   $localclr-namespace:zad2     5   	     � Title$
  Test��5   	   $	��300��6   $	��500��6#   .��5	      �  � ColumnDefinitions 5
   
   �� 5      $	��100 �6   �� 5      $	��400 �6    � RowDefinitions 5   
   �� 5      $��50 �6   �� 5      $��50 �6   �� 5      $��50 �6   �� 5      $��50 �6   �� 5      $��50 �6   .+�5   
   �� $��0��6   $��Center=�6!   $��20(�6<   	Rozmiar6S   �� 5   
   -   5         ��Name$ Rozmiar��5   �   $��0��6   $��1��6   $��Center=�6.   $	��390��6I   $
��Left=�6U    � Minimum$ 1Q�6p    � Maximum$ 50Q�6|   6�   �� 5   
   $��1��6   $��Center=�6!   $��20(�6<   Kolor6Q   �� 5   
   -   5         ��Name$ Kolor��5   c   $��1��6   $��1��6    $	��100��60   $��25��6<   $
��Left=�6H   .@�5      �� .��6   Green6"   �� 5      .��6   Red6    �� 5      .��6   Blue6!   5       �� 5"   
   $��2��6   $��Center=�6!   $��20(�6<   Tekst6Q   �� 5$   
   -   5         ��Name$ Tekst��5$   p   $��2��6   $��1��6   $	��200��6/   $��25��6;   $
��Left=�6G   $��20(�6b   6p   �� 5&   
   $��3��6   $��Center=�6!   $��20(�6<   
Długość6S   �� 5(   
   $��3��6   $��1��6!   $��Center=�61   $��20(�6L   ��6Z   ��  �� ElementName$ Tekst��	 �� StringFormat$	 liczba znakow {0}��
 �� Path$
 Text.Length��� 5*   
   $��4��6   $��2��6!   ��65   �� $ Rozmiar��$
 Value���6j   �� $ Kolor��$

 Text���6�   �� $ Tekst��$

 Text�5,      5-      