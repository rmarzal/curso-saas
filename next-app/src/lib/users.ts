/**
 * Lista de usuarios autorizados al curso.
 *
 * En producción esto debería leerse de DB o de variable de entorno
 * (AUTH_USERS_JSON con un JSON-stringify del objeto). Para mantener
 * paridad con la versión PHP actual, los hardcodeo aquí.
 *
 * Para añadir/quitar: edita el objeto `users` debajo y vuelve a deployar.
 */

const usersFromEnv = (): Record<string, string> | null => {
  const raw = process.env.AUTH_USERS_JSON;
  if (!raw) return null;
  try {
    return JSON.parse(raw) as Record<string, string>;
  } catch {
    return null;
  }
};

const users: Record<string, string> = usersFromEnv() ?? {
  "magi@funnelcracks.com": "1M2s45d$marys",
  "pcorneli@meteosim.com": "aert1nesM4",
  "jserrano.ing@gmail.com": "1M2s45d$marys",
  "yaiza_rv@hotmail.com": "1M2s45d$marys",
  "joseluis.ojeda@fox.com": "1M2s45d$marys2",
  "adrianrodrigo@adrirodrigoagencia.es": "asart1n2esR7",
};

export function verifyCredentials(
  username: string,
  password: string
): boolean {
  const normalized = username.toLowerCase().trim();
  const stored = users[normalized];
  if (!stored) return false;
  // Time-constant compare
  if (stored.length !== password.length) return false;
  let diff = 0;
  for (let i = 0; i < stored.length; i++) {
    diff |= stored.charCodeAt(i) ^ password.charCodeAt(i);
  }
  return diff === 0;
}
