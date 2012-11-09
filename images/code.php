"select * from usuarios where login = '" + usuario "' and senha = '" + senha + "'"

' or '1'='1'; -- '

# internamente vira isso:
select * from usuarios where login = '' or '1'='1'; -- '"