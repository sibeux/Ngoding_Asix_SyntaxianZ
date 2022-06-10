# import csv

# with open('G:\.shortcut-targets-by-id\\1GLhesaekxPRKr-lkNYX-mtfouqJhqhXN\SIBEUX\KULIAH\\00 - UNEJ\Algorithm Programming\PEMROGRAMAN\Main Program\\utbk.csv') as csv_file:
#     csv_reader = csv.reader(csv_file, delimiter=',')
#     line_count = 0
#     for row in csv_reader:
#         if line_count == 0:
#             print(f'Column names are {", ".join(row)}')
#             line_count += 1
#         else:
#             print(f'\t{row[0]} works in the {row[1]} department, and was born in {row[2]}.')
#             line_count += 1
#     print(f'Processed {line_count} lines.')

import pandas as pd
df = pd.read_csv('G:\.shortcut-targets-by-id\\1GLhesaekxPRKr-lkNYX-mtfouqJhqhXN\SIBEUX\KULIAH\\00 - UNEJ\Algorithm Programming\PEMROGRAMAN\Main Program\\utbk.csv')
df.columns['Nama']